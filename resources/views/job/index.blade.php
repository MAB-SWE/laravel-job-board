<div>
    <h1>JOB BOARD</h1>
    <h3>my name is {{ $name }}</h3>
    @foreach ($jobs as $job)
        <dev>{{ $job['title'] }}</dev> : <dev>{{ $job['salary'] }}</dev><br>
    @endforeach 
    
</div>
