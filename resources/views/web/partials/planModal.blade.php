<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header pricing-header px-3 py-3 pt-md-4 pb-md-4 text-center">
                <h2 class="modal-title display-4 w-100">Choose Your Plan</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <?php $i = 0; ?>
                    @foreach($totalPlan as $plan)
                        <div class="card mb-4 box-shadow card-common">
                        <div class="card-header <?php echo $i == 1 ? 'basic' : 'common'; ?>">
                            <h4 class="my-0 font-weight-normal">{{ $plan->title }}</h4>
                        </div>
                        <div class="card-body">
                            <?php
                                $feature_p = explode('|', $plan->feature_list);
                            ?>

                            <p class="head-price">{{ $feature_p[0] }}</p>
                            <h1 class="card-title pricing-card-title">${{ $plan->price }} <small class="mo">/ mo</small></h1>
                            <ul class="list-unstyled mt-3 mb-4 offer">
                                <li>{{ $feature_p[1] }}</li>
                            </ul>
                            <a href="{{ url('register?plan='.$plan->title) }}"><button type="button" class="btn btn-primary price-btn-common">Select Plan</button></a>
                            <div class="pricing-bottom">
                                <p>  • {{ $feature_p[2] }} </p>
                                <p>  • {{ $feature_p[3] }}</p>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                    @endforeach
{{--                    <div class="card mb-4 box-shadow card-basic">--}}
{{--                        <div class="card-header basic">--}}
{{--                            <h4 class="my-0 font-weight-normal">BASIC</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="head-price">I’m just starting out!</p>--}}
{{--                            <h1 class="card-title pricing-card-title">$10 <small class="mo">/ mo</small></h1>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4 offer">--}}
{{--                                <li>100 generated images / month</li>--}}
{{--                            </ul>--}}
{{--                            <a href="{{ url('register?plan=basic') }}"><button type="button" class="btn btn-primary  price-btn-basic">Selected</button></a>--}}
{{--                            <div class="pricing-bottom">--}}
{{--                                <p>  •   Unlimited support </p>--}}
{{--                                <p>  •   HTTPS encryption</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card mb-4 box-shadow card-common">--}}
{{--                        <div class="card-header common">--}}
{{--                            <h4 class="my-0 font-weight-normal">MEDIUM</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <p class="head-price">The super user!</p>--}}
{{--                            <h1 class="card-title pricing-card-title">$30 <small class="mo">/ mo</small></h1>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4 offer">--}}
{{--                                <li>500 generated images / month</li>--}}
{{--                            </ul>--}}
{{--                            <a href="{{ url('register?plan=medium') }}"><button type="button" class="btn btn-primary price-btn-common">Select Plan</button></a>--}}
{{--                            <div class="pricing-bottom">--}}
{{--                                <p>  •   Unlimited support </p>--}}
{{--                                <p>  •   HTTPS encryption</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

            </div>
        </div>
    </div>
</div>
