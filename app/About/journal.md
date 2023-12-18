###AuthenticatedSessionController is changed
//starting page (after authentication) depends on user status
```angular2html
$userStatus = auth()->user()->status->value;
    if ($userStatus ===UserStatus::Customer->value) {
    return redirect('/');
}

return redirect()->intended(RouteServiceProvider::HOME);


```
## New blade 'if' clalled 'noCustomer'
applied in welcome.blade
to block dashboard ref for users with 'customer' status
