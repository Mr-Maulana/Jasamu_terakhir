<div>
    <div style="height: 32rem;">
        <livewire:livewire-column-chart
            :column-chart-model="$chart"
        />
    </div>

    <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Interaction Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($interactionsPerService as $service => $interactionCount)
                <tr>
                    <td>{{ $service }}</td>
                    <td>{{ $interactionCount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
