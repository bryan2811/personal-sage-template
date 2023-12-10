import domReady from '@roots/sage/client/dom-ready';
import { initializeLenis } from './lenis';
import { setupAppearAnimations } from './animations';

/**
 * Application entrypoint
 */
domReady(async () => {
  // Initialize Lenis
  initializeLenis();
  setupAppearAnimations();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
