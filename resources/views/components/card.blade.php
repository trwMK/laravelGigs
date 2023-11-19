<!-- To make the component more flexible -> attribute->merger(...) to add and override styles etc. -->
<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
</div>