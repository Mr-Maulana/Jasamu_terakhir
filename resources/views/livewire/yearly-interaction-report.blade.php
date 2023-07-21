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
                <th>Kunjungan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>
                        @php
                            $totalInteractions = $yearlyReports->where('service_id', $service->id)->sum('interactions');
                        @endphp
                        {{ $totalInteractions }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
