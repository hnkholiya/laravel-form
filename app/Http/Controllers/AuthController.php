use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Step 1: Validation
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Step 2: Login attempt
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'Login Success!');
        } else {
            return back()->withErrors([
                'email' => 'Invalid email or password'
            ]);
        }
    }
}
