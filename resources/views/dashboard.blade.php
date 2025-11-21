<div class="p-10">
    <h1 class="text-2xl font-bold mb-5">Admin Dashboard</h1>

    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border p-2">ID</th>
                <th class="border p-2">Tanggal</th>
                <th class="border p-2">Jam</th>
                <th class="border p-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\Booking::all() as $booking)
            <tr>
                <td class="border p-2">{{ $booking->id }}</td>
                <td class="border p-2">{{ $booking->booking_date }}</td>
                <td class="border p-2">{{ $booking->start_time }} - {{ $booking->end_time }}</td>
                <td class="border p-2">{{ $booking->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>