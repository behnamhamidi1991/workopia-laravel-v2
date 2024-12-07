@props(['type' => 'success', 'message' => 'Post created!'])

@if(session()->has($type))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="p-4 mb-4 text-sm text-white {{ $type === 'success' ? 'bg-green-500' : 'bg-red-500' }} rounded">
    {{ $message }}
</div>
@endif