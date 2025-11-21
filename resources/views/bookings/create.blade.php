<!DOCTYPE html>
<html>
<head><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-gray-50 py-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Booking Lapangan</h2>

        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf

            <label class="block mb-2">Pilih Lapangan</label>
            <select name="field_id" class="w-full border p-2 rounded mb-4">
                @foreach($fields as $field)
                    <option value="{{ $field->id }}">{{ $field->name }} - Rp {{ number_format($field->price_per_hour) }}</option>
                @endforeach
            </select>

            <label class="block mb-2">Tanggal Main</label>
            <input type="date" name="booking_date" class="w-full border p-2 rounded mb-4">

            <div class="flex gap-2 mb-4">
                <div class="w-1/2">
                    <label class="block mb-2">Jam Mulai</label>
                    <input type="time" name="start_time" class="w-full border p-2 rounded">
                </div>
                <div class="w-1/2">
                    <label class="block mb-2">Jam Selesai</label>
                    <input type="time" name="end_time" class="w-full border p-2 rounded">
                </div>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded font-bold">Booking Sekarang</button>
        </form>
    </div>
</body>
</html>