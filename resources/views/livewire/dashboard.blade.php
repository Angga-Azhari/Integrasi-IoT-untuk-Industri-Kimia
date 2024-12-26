<div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>

    {{-- Chart Row --}}
    <div class="row">
        <div class="col-xl-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Grafik Pembacaan Sensor</h6>
                    @include('Section.mixGrpah')
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}

    {{-- Sensor Value Row --}}
    <div class="row" wire:poll='refreshdata'>
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card border-dark" style="background: #D9EAFD">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-2">MQ-135 Sensor</h6>
                            </div>
                            <div class="row text-center">
                                <div class="col-4 col-md-12 col-xl-6">
                                    <h3 class="mt-5">{{ $LastData->mq135 }} PPM</h3>
                                </div>
                                <div class="col-8 col-md-12 col-xl-6">
                                    <img src="{{ asset('asset/images/mq135.png') }}"class="img-fluid rounded-end" alt="mq-picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card border-dark" style="background: #F6F4F0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-2">Turbidity Sensor</h6>
                            </div>
                            <div class="row text-center">
                                <div class="col-4 col-md-12 col-xl-6">
                                    <h3 class="mt-5">{{ $LastData->turbidity }} NTU</h3>
                                </div>
                                <div class="col-8 col-md-12 col-xl-6">
                                    <img src="{{ asset('asset/images/turbidity_sensor.png') }}"class="img-fluid rounded-end" alt="turbidity-picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card border-dark" style="background: #BCCCDC">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-2">Temperature Sensor</h6>
                            </div>
                            <div class="row text-center">
                                <div class="col-4 col-md-12 col-xl-6">
                                    <h3 class="mt-5">{{ $LastData->temperature }} °C</h3>
                                </div>
                                <div class="col-8 col-md-12 col-xl-6">
                                    <img src="{{ asset('asset/images/coba.png') }}"class="img-fluid rounded-end" alt="temperature-picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow justify-content-md-center">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card border-dark" style="background: #EBF4F6">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-2">TDS Sensor</h6>
                            </div>
                            <div class="row text-center">
                                <div class="col-4 col-md-12 col-xl-6">
                                    <h3 class="mt-5">{{ $LastData->TDS }} PPM</h3>
                                </div>
                                <div class="col-8 col-md-12 col-xl-6">
                                    <img src="{{ asset('asset/images/tds_sensor.png') }}"class="img-fluid rounded-end" alt="TDS-picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card border-dark" style="background: #A6AEBF">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-2">pH Sensor</h6>
                            </div>
                            <div class="row text-center">
                                <div class="col-4 col-md-12 col-xl-6">
                                    <h3 class="mt-5">{{ $LastData->pH }} pH</h3>
                                </div>
                                <div class="col-8 col-md-12 col-xl-6">
                                    <img src="{{ asset('asset/images/ph_sensor.png') }}"class="img-fluid rounded-end" alt="pH-picture">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end  --}}
</div>

</div>
