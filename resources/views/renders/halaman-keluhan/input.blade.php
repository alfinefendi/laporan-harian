<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- component -->
    <div class="max-w-md mx-auto p-8 bg-white rounded-md shadow-md">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold mb-6">Get in Touch</h2>
            <a href="/tabel" class="text-blue-500 underline">Tabel</a>
        </div>
        <form id="submit-form" action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nomor_pelanggan" class="block text-gray-700 text-sm font-bold mb-2">Nomor Pelanggan</label>
                <input type="number" id="nomor_pelanggan" name="nomor_pelanggan" placeholder="123xx" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="nama_pelanggan" class="block text-gray-700 text-sm font-bold mb-2">Nama Pelanggan</label>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" placeholder="budi .." required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="nomor_hp" class="block text-gray-700 text-sm font-bold mb-2">Nomor HP</label>
                <input type="number" id="nomor_hp" name="nomor_hp" placeholder="08124xx" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="keterangan" class="block text-gray-700 text-sm font-bold mb-2">Keterangan (opsional)</label>
                <textarea id="keterangan" name="keterangan" rows="4" placeholder="keluhan .."
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
            </div>
            <button type="submit" id="submit-button"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Submit
            </button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#submit-form').on('submit', function(event) {
                event.preventDefault();
                submitForm(); // Call the submit function
            });

            function submitForm() {
                const formData = new FormData($('#submit-form')[0]);

                fetch($('#submit-form').attr('action'), {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest', 
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Assuming the server responds with JSON
                })
                .then(data => {
                  // Handle success response here
                  const namaPelanggan = $('#nama_pelanggan').val();
                  const customerNumber = $('#nomor_pelanggan').val();
                  const message = `Assalamualaikum Bapak/Ibu ${namaPelanggan} No Pel: ${customerNumber}. Perkenalkan Kami dari Service Online Wifi. Kami Mendapatkan Informasi bahwa wifinya mengalami gangguan. Mohon maaf, apakah sekarang masih belum bisa digunakan nggih?`;
                  
                  const phoneNumberInput = $('#nomor_hp').val() || '6285648623941'; 
                  const phoneNumber = phoneNumberInput.startsWith('0') ? 
                      '62' + phoneNumberInput.slice(1) : 
                      phoneNumberInput;

                  const whatsappUrl = 'https://wa.me/' + phoneNumber + '?text=' + encodeURIComponent(message);
                  window.open(whatsappUrl, '_blank');

                  // Clear all input fields
                  $('#submit-form')[0].reset(); // Reset the form fields
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
            }
            
        });
    </script>
</body>
</html>
