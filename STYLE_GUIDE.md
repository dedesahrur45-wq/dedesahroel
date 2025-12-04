# SIMASET Sekolah - Style Guide & Design System

Dokumentasi lengkap tentang styling, warna, komponen, dan konvensi design sistem SIMASET Sekolah.

## 📁 Struktur File CSS

```
resources/css/
├── app.css           # Main Tailwind & Import Custom CSS
└── custom.css        # Custom styling & design system
```

## 🎨 Color System

| Variable          | Value     | Usage                           |
| ----------------- | --------- | ------------------------------- |
| `--primary`       | `#3b82f6` | Primary buttons, links, accents |
| `--primary-dark`  | `#1e40af` | Darker shade for hover states   |
| `--primary-light` | `#dbeafe` | Light backgrounds, badges       |
| `--secondary`     | `#10b981` | Success, positive actions       |
| `--danger`        | `#ef4444` | Errors, delete actions          |
| `--warning`       | `#f59e0b` | Warnings, alerts                |
| `--dark`          | `#1f2937` | Text, dark elements             |
| `--light`         | `#f3f4f6` | Light backgrounds               |
| `--border-color`  | `#e5e7eb` | Borders, dividers               |

### Gradient Primary

```
linear-gradient(135deg, #667eea 0%, #764ba2 100%)
```

## 🔤 Typography

| Element       | Font Size | Font Weight | Usage                     |
| ------------- | --------- | ----------- | ------------------------- |
| Page Title    | 32px      | 800         | Dashboard header          |
| Section Title | 24px      | 700         | Card titles               |
| Heading 3     | 18px      | 700         | Card titles, labels       |
| Body Text     | 14px      | 400         | Regular content           |
| Small Text    | 13px      | 400         | Helper text, descriptions |
| Label         | 14px      | 600         | Form labels               |

## 📦 Component Classes

### Login Page (`.login-container`, `.login-card`)

```html
<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <span class="login-logo">SIMASET</span>
            <p class="login-subtitle">Subtitle</p>
        </div>
        <!-- Form content -->
    </div>
</div>
```

**Features:**

-   Glassmorphism effect dengan blur
-   Gradient background
-   Smooth animations (slideUp)
-   Responsive design

### Form Elements

#### Input Field

```html
<div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" class="form-input" />
</div>
```

**Styling:**

-   2px border (focuses menjadi primary color)
-   Rounded corners (12px)
-   Focus shadow effect
-   Placeholder text subtle gray

#### Checkbox

```html
<div class="checkbox-wrapper">
    <input type="checkbox" id="remember" class="checkbox-input" />
    <label for="remember" class="checkbox-label">Ingat saya</label>
</div>
```

#### Buttons

```html
<button class="btn btn-primary">Login</button>
```

**Button Variants:**

-   `.btn-primary` - Main action button
-   Size: padding 12px 24px
-   Hover: translateY(-2px) + shadow increase
-   Active: translateY(0)

### Alert/Messages

#### Error Alert

```html
<div class="error-alert">
    <p class="error-title">Terjadi kesalahan</p>
    <ul class="error-list">
        <li>Error message</li>
    </ul>
</div>
```

**Features:**

-   Red background dengan transparency
-   Shake animation on appear
-   Bullet points dengan ✕ icon

#### Success Alert

```html
<div class="success-alert">✓ Success message</div>
```

**Features:**

-   Green background
-   Slide down animation
-   Checkmark icon

### Navigation Bar (`.navbar-custom`)

```html
<nav class="navbar navbar-custom">
    <a class="navbar-brand">SIMASET</a>
    <!-- Navigation items -->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle">User Name</a>
            <ul class="dropdown-menu dropdown-menu-end">
                <!-- Menu items -->
            </ul>
        </li>
    </ul>
</nav>
```

**Features:**

-   Gradient text untuk logo
-   Underline animation on hover
-   Premium dropdown styling
-   Responsive collapse

### Dashboard Cards (`.card`)

```html
<div class="card">
    <div class="card-icon">📦</div>
    <h3 class="card-title">Title</h3>
    <p class="card-description">Description</p>
    <a href="#" class="card-link">Link →</a>
</div>
```

**Features:**

-   Hover: translateY(-8px) + shadow increase
-   Smooth transitions
-   Icon support (emoji atau font)
-   Description text

### Info Box (`.info-box`)

```html
<div class="info-box">
    <h3 class="info-title">Information</h3>
    <ul class="info-list">
        <li>Item 1</li>
        <li>Item 2</li>
    </ul>
</div>
```

**Features:**

-   Gradient background
-   Checkmark bullets
-   Purple-themed

## 🎯 Shadows & Depth

| Class         | Value                            | Usage             |
| ------------- | -------------------------------- | ----------------- |
| `--shadow-sm` | 0 1px 2px rgba(0,0,0,0.05)       | Subtle depth      |
| `--shadow-md` | 0 4px 6px -1px rgba(0,0,0,0.1)   | Card shadows      |
| `--shadow-lg` | 0 10px 15px -3px rgba(0,0,0,0.1) | Modal shadows     |
| `--shadow-xl` | 0 20px 25px -5px rgba(0,0,0,0.1) | Elevated elements |

## ✨ Animations & Transitions

### Transition Timing

```css
--transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
```

### Animations Available

#### slideUp

```css
@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
```

Used on: Login card on page load

#### shake

```css
@keyframes shake {
    0%,
    100% {
        transform: translateX(0);
    }
    25% {
        transform: translateX(-5px);
    }
    75% {
        transform: translateX(5px);
    }
}
```

Used on: Error alerts

#### slideDown

```css
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
```

Used on: Success alerts

#### pulse

```css
@keyframes pulse {
    0%,
    100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}
```

Used on: Loading indicators (`.pulse` class)

## 📱 Responsive Breakpoints

Menggunakan Tailwind breakpoints:

-   `sm`: 640px
-   `md`: 768px
-   `lg`: 1024px
-   `xl`: 1280px
-   `2xl`: 1536px

### Responsive Classes

```html
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3"></div>
```

## 🎨 Utility Classes

### Text Gradient

```html
<h1 class="text-gradient">Gradient Text</h1>
```

### Shadow Glow

```html
<div class="shadow-glow">Glowing Element</div>
```

### Pulse Animation

```html
<div class="pulse">Loading...</div>
```

## 📝 Form Best Practices

1. **Always use labels** dengan `.form-label`
2. **Group form fields** dengan `.form-group`
3. **Show validation errors** dengan `.error-message`
4. **Use appropriate input types** (email, password, number, etc)
5. **Add placeholder hints** untuk UX yang lebih baik

## 🔄 Integration dengan Laravel Blade

### Form dengan Error Display

```blade
<div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input
        type="email"
        id="email"
        name="email"
        class="form-input"
        value="{{ old('email') }}"
    >
    @error('email')
        <div class="error-message">{{ $message }}</div>
    @enderror
</div>
```

### Conditional Alert

```blade
@if ($errors->any())
    <div class="error-alert">
        <p class="error-title">Terjadi kesalahan</p>
        <ul class="error-list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
```

## 🚀 Performance Tips

1. **CSS Loading**: Custom CSS di-import via `app.css` sebelum Tailwind utilities
2. **Animation Optimization**: Gunakan `transform` dan `opacity` untuk smooth animations
3. **Shadow Usage**: Gunakan shadow sparingly untuk performa yang lebih baik
4. **Color System**: Gunakan CSS variables untuk maintainability

## 📚 Color Reference

### Primary Gradient

```
Start: #667eea (Indigo)
End: #764ba2 (Purple)
Direction: 135deg
```

### Usage dalam Tailwind

```html
<!-- Tailwind classes tersedia untuk colors default -->
<div class="bg-blue-600 text-white">...</div>
<div class="hover:bg-blue-700">...</div>
```

## 🛠️ Customization

Untuk memodifikasi warna atau styling:

1. Edit CSS variables di `:root` dalam `custom.css`
2. Update `@keyframes` untuk animations
3. Modify `.btn-primary`, `.card`, dll sesuai kebutuhan
4. Test responsive design di berbagai screen sizes

## 📞 Support

Jika ada pertanyaan tentang styling, cek:

1. `resources/css/custom.css` - Main styling file
2. `resources/views/` - Component examples
3. File `.blade.php` untuk implementasi

---

**Last Updated**: December 2025
**Version**: 1.0
**Framework**: Laravel 10 + Tailwind CSS + Bootstrap 5
