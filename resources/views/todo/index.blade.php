<h1>Mes Todos</h1>


<div>Nombres de todos : {{$todoCount}}</div>


<ul>
    @foreach($todos as $todo)
        <li>
            {{$todo->id}} - {{$todo->name}}
            <form action="{{route('todo.delete', $todo->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">DELETE</button>
            </form>
            <a href="{{route('todo.view', $todo->id)}}">Voir</a>
        </li>
    @endforeach
</ul>


<h2>Ajouter :</h2>

@if($errors->any())
    {{ implode('', $errors->all(':message')) }}
@endif

<form action="{{route('todo.add')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nom">
    <button type="submit">Ajouter</button>
</form>
