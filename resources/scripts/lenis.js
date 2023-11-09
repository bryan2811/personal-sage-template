import Lenis from '@studio-freight/lenis';

/**
 * Initializes and runs the Lenis animation frame.
 */
function initializeLenis() {
    const lenis = new Lenis();

    /**
     * Calls the request animation frame with Lenis
     * @param {DOMHighResTimeStamp} time - The timestamp of the current frame.
     */
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
}

// Export the initialize function
export { initializeLenis };
