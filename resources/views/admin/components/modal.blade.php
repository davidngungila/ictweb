{{-- Modal Component --}}
<div id="{{ $id }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <!-- Modal Header -->
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">{{ $title }}</h3>
                <button onclick="closeModal('{{ $id }}')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <!-- Modal Content -->
            <div class="mt-2">
                {{ $slot }}
            </div>
            
            <!-- Modal Footer -->
            @if(isset($footer))
                <div class="mt-6 flex justify-end space-x-3">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>

<script>
function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.classList.contains('bg-opacity-50')) {
        event.target.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
});
</script>
