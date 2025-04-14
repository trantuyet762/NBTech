/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.php", "template/**/*.php"],
  theme: {
    extend: {
      container: {
        padding: "1rem",
        center: true,
      },
      colors: {
        'color-main': "#303030",
        'color-v1': "#2E3C90",
        'color-v2': "#3D73B2",
        'color-v3': "#A52424",
        'color-v4': "#F2FAFF",
        'color-v5': "#828282",
        'color-v6': "#0F9408",
        'color-v7': "#EDF5FF",
      },
      fontFamily: {
        nunito: ["'Nunito'"],
        inter: ["'Inter'"],
      },
    },
    screens: {
      xs: "450px",
      sm: "576px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1472px",
    },
  },
  plugins: [],
}
