

    <h1>タスク一覧</h1>
    
    @if(count($tasklists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            
            <tbody>
             
                
            @foreach ($tasklists as $tasklist)
                <?php $user = $tasklist->user; ?>
                    <tr>
                        <td>{!! link_to_route ('users.show', $tasklist->id, ['id' => $tasklist->id]) !!}</td>
                        <td>{{ $tasklist->status }}</td>
                        <td>{{ $tasklist->content }}</td>
                    </tr>
                    
            @endforeach               
         
            </tbody>
        </table>
    @endif


 {!! link_to_route('tasklists.create', '新規タスク登録', null, ['class' => 'btn btn-primary']) !!}