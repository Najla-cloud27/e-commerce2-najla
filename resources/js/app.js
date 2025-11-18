import "./bootstrap";
import "preline";

// Re-init Preline setiap kali Livewire melakukan navigasi
document.addEventListener("livewire:navigated", () => {
    window.HSStaticMethods.autoInit();
});
