

    <h1>タスク一覧</h1>
    
    @if(count($jobs) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach ($jobs as $job)
                <?php $user = $job->user; ?>
                    <tr>
                        <td>{!! link_to_route ('tasklists.show', $job->id, ['id' => $job->id]) !!}</td>
                        <td>{{ $job->status }}</td>
                        <td>{{ $job->content }}</td>
                    </tr>
            @endforeach   
            </tbody>
        </table>
    @endif

    
 {!! link_to_route('tasklists.create', '新規タスク登録', null, ['class' => 'btn btn-primary']) !!}
