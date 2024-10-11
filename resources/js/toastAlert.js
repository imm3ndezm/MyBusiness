// Función para mostrar el toast
window.toastAlert = function (type, title, message) {
    const toastContainer = document.getElementById('toast-container');

    let borderColor;
    let svgIcon;
    let colorClass;

    // Definir los íconos y colores según el tipo de alerta
    switch (type) {
        case 'success':
            borderColor = `border-green-500 bg-green-50`;
            colorClass = 'text-green-600';
            svgIcon = `
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>`;
            break;
        case 'danger':
            borderColor = `border-red-500 bg-red-50`;
            colorClass = 'text-red-600';
            svgIcon = `
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>`;
            break;
        case 'warning':
            borderColor = `border-yellow-500 bg-yellow-50`;
            colorClass = 'text-yellow-600';
            svgIcon = `
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>`;
            break;
        default:
            borderColor = `border-gray-500 bg-gray-50`;
            colorClass = 'text-gray-600';
            svgIcon = ''; // Puedes agregar un ícono por defecto si lo deseas
            break;
    }

    // Generar un ID único para cada toast
    const toastId = `toast-${Date.now()}`;

    // Crear el HTML dinámicamente
    const toastHTML = `
        <div id="${toastId}" class="w-fit max-w-xl opacity-0 transition-opacity duration-500 ease-in-out mt-2">
            <div role="alert" class="rounded-xl border-s-4 ${borderColor} bg-white dark:bg-gray-700 p-4 shadow-lg">
                <div class="flex items-start gap-4">
                    <span class="${colorClass}">
                        ${svgIcon}
                    </span>

                    <div class="flex-1">
                        <strong class="block font-medium text-gray-900 dark:text-gray-50">${title}</strong>
                        <p class="mt-1 text-sm text-gray-700 dark:text-gray-400">${message}</p>
                    </div>

                    <button onclick="closeToast('${toastId}')" class="text-gray-500 transition hover:text-gray-600">
                        <span class="sr-only">Dismiss popup</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    `;

    // Insertar el toast en el contenedor
    toastContainer.insertAdjacentHTML('beforeend', toastHTML);

    const toast = document.getElementById(toastId);

    // Mostrar el toast con animación
    setTimeout(() => {
        toast.classList.remove('opacity-0');
        toast.classList.add('opacity-100');
    }, 100);

    // Ocultar automáticamente después de 3 segundos
    setTimeout(() => {
        closeToast(toastId);
    }, 5000);
}

// Función para cerrar el toast
window.closeToast = function (toastId) {
    const toast = document.getElementById(toastId);
    if (toast) {
        toast.classList.remove('opacity-100');
        toast.classList.add('opacity-0'); // Añadir animación de salida
        setTimeout(() => {
            toast.remove(); // Eliminar el toast del DOM después de la animación
        }, 500); // Coincide con el tiempo de la animación de transición
    }
};
