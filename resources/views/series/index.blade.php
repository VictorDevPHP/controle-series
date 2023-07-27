<x-layout title="Series">

<ul>
    @foreach ($series as $serie)
        <li>{{$serie}}</li>
    @endforeach
</ul>


{{-- trazendo para o Js --}}
{{-- <script>
    const series = {{Js::from($series)}}; 
</script> --}}

</x-layout> 