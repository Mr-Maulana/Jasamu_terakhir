<div>
    <!-- Tabel untuk laporan interaksi harian -->
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Interaction Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
            <tr>
                <td>{{ $report->date }}</td>
                <td>{{ $report->interaction_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
