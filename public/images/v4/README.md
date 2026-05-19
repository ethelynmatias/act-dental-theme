# V1 Theme Images

This directory contains images sourced from Smile Source (https://smilesource.com/) for the v1 dental practice website template.

## Downloaded Images

### Main Assets
- **logo.png** - Smile Source logo (1.66 KB)
  - Use: Header/navigation logo
  - Dimensions: 300x47 pixels
  
- **hero-home.gif** - Animated hero banner (771 KB)
  - Use: Full-width hero section background
  - Auto-animating GIF
  
- **challenges.png** - Dental practice challenges illustration (118 KB)
  - Use: Section illustration showing practice pain points
  - Dimensions: 600x500 pixels
  
- **dentist-1.png** - Team member photo - Jeff Henneberg (120 KB)
  - Use: Team section, testimonial photos
  - Dimensions: 512x512 pixels (square, ideal for profile photos)
  
- **dentist-2.png** - Team member photo - Dr. Kyle Benton (126 KB)
  - Use: Team section, testimonial photos
  - Dimensions: 512x512 pixels (square, ideal for profile photos)

## Usage Recommendations

### Layout Suggestions
1. **Hero Section**: Use `hero-home.gif` as background with overlay text
2. **Logo/Branding**: Place `logo.png` in header navigation
3. **Practice Challenges**: Use `challenges.png` to illustrate common dental practice issues
4. **Team Section**: Display `dentist-1.png` and `dentist-2.png` with testimonials

### CSS Tips
```css
/* Hero section */
.hero {
    background-image: url('/images/v1/hero-home.gif');
    background-size: cover;
    background-position: center;
}

/* Logo */
.logo {
    max-width: 300px;
}

/* Team photos */
.team-member img {
    border-radius: 50%;
    width: 200px;
    height: 200px;
    object-fit: cover;
}
```

## Source Information
- Source: Smile Source (https://smilesource.com/)
- Downloaded: May 19, 2026
- License: Please verify usage rights with Smile Source

## Additional Assets Available
The following additional assets are available from Smile Source but not yet downloaded:

### Vendor Logos (5)
- Envista
- Henry Schein Dental
- Dentsply Sirona
- Microdental
- NDX

### Blog Icons (6)
- Cherry icon
- Curve icon
- Ergonomics icon
- Anxiety awareness icon
- AI/Bola AI icon
- Oral cancer awareness icon

To download additional assets, update the scripts in the parent directory or request specific images.
