namespace App\Http\Controllers;

use App\Models\RegisteredCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisteredCustomerController extends Controller
{
    public function customerSignUp(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:registered_customers,email',
            'phone_number'=> 'required|integer',
            'password'   => 'required|string|min:6|confirmed',
        ]);
        
        try {
            $newUser = RegisteredCustomer::create([
                'first_name' => $validated['first_name'],
                'last_name'  => $validated['last_name'],
                'email'      => $validated['email'],
                'phone_number'=> $validated['phone_number'],
                'password'   => Hash::make($validated['password']),
            ]);

            auth()->login($newUser); // Log the user in immediately
            return redirect()->route('customer-dashboard')->with('success', 'Your account has been created and you are now logged in!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Please try again.']);
        }
    }

    public function customerLogin(Request $request)
    {
        $validated = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $user = RegisteredCustomer::where('email', $validated['email'])->first();

        if ($user && Hash::check($validated['password'], $user->password)) {
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->first_name . ' ' . $user->last_name);
            return redirect()->route('customer-dashboard');
        } else {
            return back()->withErrors(['error' => 'Invalid login credentials.']);
        }
    }
}
