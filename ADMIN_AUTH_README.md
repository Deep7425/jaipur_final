# Admin Authentication System

This Laravel application now includes a complete admin authentication system with middleware protection for all admin routes.

## Features

- ✅ **Secure Admin Login** - Dedicated admin login page with professional UI
- ✅ **Middleware Protection** - All admin routes protected by custom AdminAuth middleware
- ✅ **User Role Management** - `is_admin` field to distinguish admin users from regular users
- ✅ **Session Management** - Proper login/logout with session handling
- ✅ **Admin User Creation** - Artisan command and seeder for creating admin users
- ✅ **Beautiful UI** - Modern, responsive admin login interface

## Admin Access

### Login URL
```
http://your-domain.com/admin/login
```

### Default Admin Credentials
```
Email: admin@jazbaa.com
Password: admin123
```

## System Components

### 1. AdminAuth Middleware
- **Location**: `app/Http/Middleware/AdminAuth.php`
- **Purpose**: Protects admin routes and ensures only authenticated admin users can access them
- **Features**:
  - Checks if user is authenticated
  - Verifies user has admin privileges (`is_admin = true`)
  - Redirects unauthorized users to login page

### 2. Admin Authentication Controller
- **Location**: `app/Http/Controllers/Admin/AuthController.php`
- **Routes**:
  - `GET /admin/login` - Show login form
  - `POST /admin/login` - Process login
  - `POST /admin/logout` - Logout admin user

### 3. User Model Updates
- **Location**: `app/Models/User.php`
- **New Fields**:
  - `is_admin` (boolean) - Determines if user is an admin
- **New Methods**:
  - `isAdmin()` - Check if user is admin
  - `scopeAdmins()` - Query scope for admin users

### 4. Database Migration
- **File**: `database/migrations/2025_09_13_061739_add_is_admin_to_users_table.php`
- **Purpose**: Adds `is_admin` boolean field to users table

### 5. Admin Login View
- **Location**: `resources/views/admin/auth/login.blade.php`
- **Features**:
  - Modern, responsive design
  - Form validation display
  - Success/error message handling
  - Professional admin portal UI

## Protected Routes

All routes under the `/admin` prefix (except login routes) are now protected by the `admin.auth` middleware:

```php
// Protected Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['admin.auth'])->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::get('/products', [AdminHomeController::class, 'products'])->name('products');
    Route::get('/brands', [AdminHomeController::class, 'brands'])->name('brands');
    Route::get('/categories', [AdminHomeController::class, 'categories'])->name('categories');
    Route::get('/orders', [AdminHomeController::class, 'orders'])->name('orders');
    Route::resource('slider', SliderController::class);
    // ... all other admin routes
});
```

## Creating Admin Users

### Method 1: Using Artisan Command
```bash
# Interactive mode
php artisan admin:create

# With parameters
php artisan admin:create --name="Admin Name" --email="admin@example.com" --password="password123"
```

### Method 2: Using Database Seeder
```bash
# Run the admin seeder
php artisan db:seed --class=AdminUserSeeder
```

### Method 3: Manual Database Entry
```sql
INSERT INTO users (name, email, password, is_admin, email_verified_at, created_at, updated_at) 
VALUES ('Admin User', 'admin@example.com', '$2y$12$hashed_password', 1, NOW(), NOW(), NOW());
```

## Security Features

1. **Password Hashing**: All passwords are hashed using Laravel's default bcrypt
2. **Session Management**: Proper session regeneration on login/logout
3. **CSRF Protection**: All forms protected with CSRF tokens
4. **Input Validation**: Comprehensive validation on login form
5. **Middleware Protection**: All admin routes protected at middleware level
6. **Role Verification**: Double-check admin status on each request

## UI Components

### Admin Header Updates
- Shows authenticated admin's name
- Logout button in user dropdown
- Proper logout form with CSRF protection

### Admin Sidebar Updates
- Logout button at the bottom of sidebar
- Consistent styling with existing admin theme

## Error Handling

The system handles various error scenarios:

- **Unauthenticated Access**: Redirects to login with error message
- **Non-Admin Access**: Logs out user and redirects to login
- **Invalid Credentials**: Shows validation errors
- **Session Expiry**: Automatically redirects to login

## Installation Steps

1. **Run Migration** (if not already done):
   ```bash
   php artisan migrate
   ```

2. **Create Admin User**:
   ```bash
   php artisan admin:create
   ```

3. **Access Admin Panel**:
   - Visit `/admin/login`
   - Enter admin credentials
   - Access protected admin routes

## Customization

### Changing Login Page Design
Edit `resources/views/admin/auth/login.blade.php`

### Modifying Middleware Behavior
Edit `app/Http/Middleware/AdminAuth.php`

### Adding More Admin Routes
Add routes to the protected group in `routes/web.php`

### Custom Admin Roles
Extend the User model to include more role types beyond just `is_admin`

## Troubleshooting

### Common Issues

1. **"Column 'is_admin' doesn't exist"**
   - Run: `php artisan migrate`

2. **"Cannot access admin panel"**
   - Ensure user has `is_admin = 1` in database
   - Check if middleware is properly registered

3. **"Login page not found"**
   - Clear route cache: `php artisan route:clear`
   - Check routes: `php artisan route:list`

4. **"Session issues"**
   - Clear cache: `php artisan cache:clear`
   - Clear config: `php artisan config:clear`

## Testing

### Test Admin Login
1. Create admin user
2. Visit `/admin/login`
3. Enter credentials
4. Verify redirect to dashboard
5. Test logout functionality

### Test Route Protection
1. Try accessing `/admin` without login
2. Should redirect to login page
3. Login and verify access granted

## Security Considerations

- Change default admin credentials in production
- Use strong passwords for admin accounts
- Consider implementing two-factor authentication
- Monitor admin access logs
- Regularly update Laravel and dependencies
- Use HTTPS in production

---

**Note**: This authentication system is designed for admin panel access. For customer/user authentication, you may want to implement a separate authentication system or extend this one with different user roles. 
