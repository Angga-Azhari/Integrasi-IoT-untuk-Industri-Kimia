@livewireScripts
<script src="{{ asset('asset/vendors/core/core.js') }}"></script>
<script src="{{ asset('asset/vendors/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('asset/vendors/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('asset/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('asset/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('asset/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('asset/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('asset/js/template.js') }}"></script>
<script src="{{ asset('asset/js/dashboard.js') }}"></script>
<script src="{{ asset('asset/js/datepicker.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

@yield('scripts')
@stack('scripts')
