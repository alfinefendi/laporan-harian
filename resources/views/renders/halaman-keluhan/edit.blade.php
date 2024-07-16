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
                <input type="number" id="nomor_pelanggan"  value="{{$keluhan->nomor_pelanggan}}"  name="nomor_pelanggan" placeholder="123xx" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="nama_pelanggan" class="block text-gray-700 text-sm font-bold mb-2">Nama Pelanggan</label>
                <input type="text" id="nama_pelanggan" value="{{$keluhan->nama_pelanggan}}" name="nama_pelanggan" placeholder="budi .." required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="keterangan" class="block text-gray-700 text-sm font-bold mb-2">Penanganan (wajib setelah dipastikan)</label>
                <textarea id="penanganan"  name="penanganan" rows="4" placeholder="keluhan .."
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">{{$keluhan->penanganan}}</textarea>
            </div>
            <button type="submit" id="submit-button"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                Submit
            </button>
        </form>
    </div>
</body>
</html>
