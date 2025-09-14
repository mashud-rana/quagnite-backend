<div>
    @foreach ($results as $key => $item)
        <ul>
            <li>
                <p>Exam Date</p>
                <h5>{{ custom_date($item->created_at) }}</h5>
            </li>
            <li>
                <p>Attempt</p>
                <h5>{{ ++$key }}</h5>
            </li>
            <li>
                <p>Total Question</p>
                <h5>{{ $item->total_qus }}</h5>
            </li>
            <li>
                <p>Correct Answer</p>
                <h5>{{ $item->correct_ans }}</h5>
            </li>
            <li>
                <p>Wrong Answer</p>
                <h5>{{ $item->wrong_ans }}</h5>
            </li>
            <li>
                <p>Score</p>
                <h5>{{ $item->score }}</h5>
            </li>

        </ul>
        <hr>
    @endforeach
</div>
