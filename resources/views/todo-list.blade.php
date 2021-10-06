@extends('template.layout')

@section('content')

</div>
<body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/script1.js')}}"></script>
<div class="wrapper">
              <header> TodoList </header>
              <div class="inputField">
                <input type="text" placeholder="Tambahkan Tugas Baru">
                <button><i class="fas fa-plus"></i></i></button>
              </div>
              <ul class="todoList">
              </ul>
              <div class="footer">
                <span>Kamu punya <span class="pendingTasks"></span> tugas</span>
                <button>Clear All</button>
              </div>
            </div>
</div>
</body>  

@endsection