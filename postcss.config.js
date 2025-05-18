// postcss.config.js
import nesting from 'postcss-nesting';

export default {
  plugins: {
    'postcss-nesting': nesting,
    tailwindcss: {},
    autoprefixer: {},
  },
}