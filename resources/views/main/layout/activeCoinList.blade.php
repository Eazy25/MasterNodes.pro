<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <?php
    $ag = 1;
    $total = count($coinList);
    $amount = $total / 2;?>
    @foreach ($coinList as $key => $one)
        @if ($ag === 1)
            <div class="row">
                @endif
                @if (isset($one['mnpstat']) && $one['mnpstat'] === 'maint')
                    @include('main.layout.activeGridMaint')
                @else
                    @include('main.layout.activeGrid')
                @endif
                @if($ag === 2)
                    <?php $ag = 0;?>
            </div>
        @endif
        <?php $ag++; ?>
    @endforeach
    @if (!is_int($amount))
</div>
@endif
</div>