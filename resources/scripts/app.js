import domReady from '@roots/sage/client/dom-ready';
import { initializeLenis } from './lenis';
import { initializeHeader } from './header';
import { setupAppearAnimations } from './animations';

/**
 * Application entrypoint
 */
domReady(async () => {
  // Initialize Lenis
  initializeLenis();
  initializeHeader();
  setupAppearAnimations();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
