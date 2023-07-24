<div>
    <!-- Tabel untuk laporan interaksi harian -->
    <div style="height: 32rem;">
        <livewire:livewire-column-chart
        :column-chart-model="$chart "
    />
     </div>

     
    <table>
        <thead>
            <tr>
                <th>Bulan</th>
                @foreach ($services as $service)
                    <th>{{ $service->name }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($totalInteractionsPerMonth as $monthLabel => $interactionsPerService)
                <tr>
                    <td>{{ $monthLabel }}</td>
                    @foreach ($services as $service)
                        <td>
                            @php
                                $totalInteractions = isset($interactionsPerService[$service->name]) ? $interactionsPerService[$service->name] : 0;
                            @endphp
                            {{ $totalInteractions }}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
   
</div>
