<div>
    <h1 class="text-3xl font-bold mb-4">Monthly Interaction Report</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Month</th>
                <th>Interactions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->month }}</td>
                    <td>{{ $report->interactions }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
