@extends('AldrumoCom::layouts.site')

@section('content')
    <section class="container px-4 py-24 mx-auto">
        <div class="grid items-center grid-cols-1 mb-24 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
            <div>
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">
                    <x-Blocks::renderer key="feature-1-title">
                        Clear overview for efficient tracking
                    </x-Blocks::renderer>
                </h2>
                <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
                    <x-Blocks::renderer key="feature-1-body">
                        Handle your subscriptions and transactions efficiently with the clear overview in Dashboard. Features like the smart search option allow you to quickly find any data you’re looking for.
                    </x-Blocks::renderer>
                </p>
            </div>
            <div class="w-full h-full bg-black shadow rounded">
                <x-Blocks::renderer key="feature-1-image"></x-Blocks::renderer>
            </div>
        </div>
        <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
            <div class="order-none md:order-2">
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">
                    <x-Blocks::renderer key="feature-2-title">
                        Clear overview for efficient tracking
                    </x-Blocks::renderer>
                </h2>
                <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
                    <x-Blocks::renderer key="feature-2-body">
                        Handle your subscriptions and transactions efficiently with the clear overview in Dashboard. Features like the smart search option allow you to quickly find any data you’re looking for.
                    </x-Blocks::renderer>
                </p>
            </div>
            <div class="w-full h-full bg-black shadow rounded">
                <x-Blocks::renderer key="feature-2-image"></x-Blocks::renderer>
            </div>
        </div>
    </section>

    <section class="bg-white shadow">
        <div class="container px-4 py-24 mx-auto">
            <h2 class="mb-4 text-xl font-bold md:text-3xl">
                <x-Blocks::renderer key="faq-title">
                    Frequently Asked Questions
                </x-Blocks::renderer>
            </h2>
            <div class="grid grid-cols-1 gap-0 text-gray-600 md:grid-cols-2 md:gap-16">
                <div>
                    <x-Blocks::renderer key="faq-left-col">
                        <h5 class="mt-10 mb-3 font-semibold text-gray-900">What is a question?</h5>
                        <p>
                            An answer to a question.
                        </p>
                    </x-Blocks::renderer>
                </div>
                <div>
                    <x-Blocks::renderer key="faq-right-col">
                        <h5 class="mt-10 mb-3 font-semibold text-gray-900">What is a question?</h5>
                        <p>
                            An answer to a question.
                        </p>
                    </x-Blocks::renderer>
                </div>
            </div>
        </div>
    </section>

    <section class="grid items-center justify-center grid-cols-1 px-4 py-24 text-center lg:grid-cols-3">
        <div class="col-auto lg:col-start-2">
            <p class="mb-2 text-base font-semibold text-primary">
                <x-Blocks::renderer key="cta-lead">
                    Prices now start at just $25/month*
                </x-Blocks::renderer>
            </p>
            <h2 class="mb-6 text-3xl tracking-tight md:leading-tight md:text-4xl md:mb-6">
                <x-Blocks::renderer key="cta-title">
                    Join more than 100,000 small businesses teams.
                </x-Blocks::renderer>
            </h2>
            <x-Blocks::renderer key="cta-button">
                <a href="#" class="w-full shadow-xl btn btn-primary btn-lg sm:w-auto">
                    Get started now
                </a>
            </x-Blocks::renderer>
        </div>
    </section>
@endsection
