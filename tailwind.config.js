module.exports = {
  content: [
    "./**/*.{php,html,js}",
    "./*.{php,html,js}"
  ],
  theme: {
    extend: {
      screens: {
        'sm': '640px',  // Mobile
        'md': '768px',  // Tablet
        'lg': '1024px', // Laptop
        'xl': '1280px', // Desktop
        '2xl': '1536px' // Large Desktop
      },
      colors: {
        'wmsu-red': '#BD0F03',
        'wmsu-dark-red': '#7C0A02',
      },
      fontFamily: {
        'inter': ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
} 