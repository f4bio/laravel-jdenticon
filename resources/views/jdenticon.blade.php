<img {{ $attributes->merge(["class" => "rounded-full"]) }}
     src="{{ $icon->getImageDataUri() }}"
     alt="{{ $value }}"
     width="{{ $size }}"
     height="{{ $size }}"
/>
