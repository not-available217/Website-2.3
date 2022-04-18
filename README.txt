# nieuwe gebruiker aanmaken

$ php artisan tinker
>>> $user = new App\Models\User();
>>> $user->password = Hash::make('test');
>>> $user->email = 'test@test.nl';
>>> $user->name = 'Test';
>>> $user->save();
