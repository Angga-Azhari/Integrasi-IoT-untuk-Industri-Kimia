<div>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Grafik Pembacaan Sensor MQ 135</h4>
        </div>
    </div>

    {{-- Chart Row --}}
    <div class="row">
        <div class="col-xl-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Grafik Pembacaan Sensor</h6>
                    @include('Section.GraphSensor.SensorMQ')
                </div>
            </div>
        </div>
        <div class="col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Grafik Pembacaan Sensor</h6>
                    @include('Section.GraphSensor.SensorMQ')
                </div>
            </div>
        </div>
    </div>
</div>
