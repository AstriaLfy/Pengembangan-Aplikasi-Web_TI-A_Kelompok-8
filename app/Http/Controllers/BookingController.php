use App\Models\Booking;
use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Untuk ambil ID user yang login

public function create()
{
    $fields = Field::all(); // Ambil semua data lapangan
    return view('bookings.create', compact('fields'));
}

public function store(Request $request)
{
    $request->validate([
        'field_id' => 'required',
        'booking_date' => 'required|date',
        'start_time' => 'required',
        'end_time' => 'required',
    ]);


    Booking::create([
        'user_id' => 1,
        'field_id' => $request->field_id,
        'booking_date' => $request->booking_date,
        'start_time' => $request->start_time,
        'end_time' => $request->end_time,
        'status' => 'pending',
        'total_price' => 0
    ]);

    return redirect('/')->with('success', 'Booking Berhasil!');
}