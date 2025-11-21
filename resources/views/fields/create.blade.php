<form action="{{ route('fields.store') }}" method="POST" class="p-10">
    @csrf
    <h2 class="text-2xl font-bold mb-5">Tambah Lapangan Baru</h2>

    <input type="text" name="name" placeholder="Nama Lapangan" class="border p-2 w-full mb-4">

    <select name="type" class="border p-2 w-full mb-4">
        <option value="sintetis">Rumput Sintetis</option>
        <option value="matras">Matras</option>
        <option value="vinyl">Vinyl</option>
    </select>

    <input type="number" name="price_per_hour" placeholder="Harga per Jam" class="border p-2 w-full mb-4">

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Lapangan</button>
</form>