@extends ('layuots.master')
@section ('content')
<h1>Hello World !! {{ $name }}</h1>
<h2>Tao <?php echo $age?> tuổi</h2>
        @if($age > 20)
           <p>{{ $name }} đủ tuổi đi học</p>
        @else
           <p>{{ $name }} chưa đủ tuổi</p>
        @endif

        @for($i = 0 ; $i <5 ; $i ++)
           <p> {{$i + 1}}</p>
        @endfor

        @foreach ($students as $key => $student)

           <p>{{$key}}  {{$student}}</p>
        @endforeach
        <form action="" method="post">
            <input type="text" name= "name">
            <input type="submit">
        </form>



        @endsection
