<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $project['title'] }} — Bimo Chesta Adabi
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body class="bg-[#080808] text-white antialiased">


    <!-- ================= NAVBAR ================= -->

    <header class="fixed top-0 left-0 right-0 z-50">

        <nav class="max-w-7xl mx-auto px-5 lg:px-8 py-5">

            <div class="
                flex
                items-center
                justify-between
                rounded-2xl
                border
                border-white/[0.08]
                bg-[#080808]/80
                backdrop-blur-xl
                px-5
                py-3
            ">

                <a
                    href="/"
                    class="
                        font-display
                        text-xl
                        font-bold
                    "
                >
                    BIMO<span class="text-white/25">.</span>
                </a>


                <a
                    href="/#projects"
                    class="
                        text-sm
                        text-white/40
                        transition
                        hover:text-white
                    "
                >
                    ← Back to Projects
                </a>

            </div>

        </nav>

    </header>



    <!-- ================= HERO ================= -->

    <main>

        <section
            class="
                min-h-[85vh]
                flex
                items-end
                border-b
                border-white/[0.06]
                pt-40
                pb-20
            "
        >

            <div class="
                max-w-7xl
                mx-auto
                w-full
                px-5
                lg:px-8
            ">


                <div class="
                    max-w-4xl
                ">


                    <!-- NUMBER -->

                    <div class="
                        font-mono
                        text-xs
                        tracking-[0.3em]
                        text-white/20
                    ">

                        {{ $project['number'] }}

                        <span class="mx-2">
                            /
                        </span>

                        {{ $project['category'] }}

                    </div>


                    <!-- TITLE -->

                    <h1 class="
                        mt-7
                        font-display
                        text-6xl
                        sm:text-7xl
                        lg:text-9xl
                        font-bold
                        tracking-[-0.07em]
                        leading-[0.85]
                    ">

                        {{ $project['title'] }}

                    </h1>


                    <!-- DESCRIPTION -->

                    <p class="
                        mt-10
                        max-w-2xl
                        text-lg
                        sm:text-xl
                        leading-8
                        text-white/40
                    ">

                        {{ $project['description'] }}

                    </p>


                    <!-- STACK -->

                    <div class="
                        flex
                        flex-wrap
                        gap-2
                        mt-8
                    ">

                        @foreach($project['stack'] as $tech)

                            <span class="tag">

                                {{ $tech }}

                            </span>

                        @endforeach

                    </div>

                </div>

            </div>

        </section>



        <!-- ================= IMAGE ================= -->

        <section class="py-20">

            <div class="
                max-w-7xl
                mx-auto
                px-5
                lg:px-8
            ">

                <div class="
                    relative
                    aspect-[16/8]
                    overflow-hidden
                    rounded-[2rem]
                    border
                    border-white/[0.08]
                    bg-[#111]
                ">


                    <img
                        src="{{ $project['image'] }}"
                        alt="{{ $project['title'] }}"
                        class="
                            absolute
                            inset-0
                            w-full
                            h-full
                            object-cover
                        "
                        onerror="this.style.display='none'"
                    >


                    <!-- FALLBACK -->

                    <div class="
                        absolute
                        inset-0
                        flex
                        flex-col
                        items-center
                        justify-center
                        bg-gradient-to-br
                        from-white/[0.06]
                        to-transparent
                    ">

                        <span class="
                            font-mono
                            text-xs
                            tracking-[0.3em]
                            text-white/20
                        ">

                            PROJECT {{ $project['number'] }}

                        </span>


                        <span class="
                            mt-4
                            font-display
                            text-5xl
                            sm:text-7xl
                            font-bold
                            tracking-[-0.05em]
                            text-white/[0.15]
                        ">

                            {{ $project['title'] }}

                        </span>

                    </div>

                </div>

            </div>

        </section>



        <!-- ================= OVERVIEW ================= -->

        <section class="py-24">

            <div class="
                max-w-7xl
                mx-auto
                px-5
                lg:px-8
            ">


                <div class="
                    grid
                    lg:grid-cols-[.6fr_1.4fr]
                    gap-16
                ">


                    <div>

                        <span class="section-label">
                            01 — Overview
                        </span>

                    </div>


                    <div>

                        <p class="
                            font-display
                            text-2xl
                            sm:text-3xl
                            leading-relaxed
                            text-white/70
                        ">

                            {{ $project['overview'] }}

                        </p>

                    </div>

                </div>

            </div>

        </section>



        <!-- ================= PROBLEM / SOLUTION ================= -->

        <section
            class="
                border-t
                border-white/[0.06]
                py-24
            "
        >

            <div class="
                max-w-7xl
                mx-auto
                px-5
                lg:px-8
            ">


                <div class="
                    grid
                    md:grid-cols-2
                    gap-6
                ">


                    <!-- PROBLEM -->

                    <div class="
                        rounded-[1.7rem]
                        border
                        border-white/[0.08]
                        bg-white/[0.02]
                        p-8
                        lg:p-10
                    ">

                        <span class="
                            font-mono
                            text-xs
                            text-white/20
                        ">
                            02 — Problem
                        </span>


                        <h2 class="
                            mt-8
                            font-display
                            text-3xl
                            font-semibold
                        ">

                            The challenge.

                        </h2>


                        <p class="
                            mt-5
                            leading-8
                            text-white/40
                        ">

                            {{ $project['problem'] }}

                        </p>

                    </div>



                    <!-- SOLUTION -->

                    <div class="
                        rounded-[1.7rem]
                        border
                        border-white/[0.08]
                        bg-white/[0.02]
                        p-8
                        lg:p-10
                    ">

                        <span class="
                            font-mono
                            text-xs
                            text-white/20
                        ">
                            03 — Solution
                        </span>


                        <h2 class="
                            mt-8
                            font-display
                            text-3xl
                            font-semibold
                        ">

                            The approach.

                        </h2>


                        <p class="
                            mt-5
                            leading-8
                            text-white/40
                        ">

                            {{ $project['solution'] }}

                        </p>

                    </div>

                </div>

            </div>

        </section>



        <!-- ================= FEATURES ================= -->

        <section
            class="
                border-t
                border-white/[0.06]
                py-24
            "
        >

            <div class="
                max-w-7xl
                mx-auto
                px-5
                lg:px-8
            ">


                <div class="
                    grid
                    lg:grid-cols-[.6fr_1.4fr]
                    gap-16
                ">


                    <div>

                        <span class="section-label">
                            04 — Features
                        </span>

                        <h2 class="section-title">
                            What's
                            <span>inside.</span>
                        </h2>

                    </div>


                    <div>

                        <div class="
                            divide-y
                            divide-white/[0.08]
                            border-y
                            border-white/[0.08]
                        ">

                            @foreach($project['features'] as $index => $feature)

                                <div class="
                                    flex
                                    items-center
                                    justify-between
                                    py-6
                                    group
                                ">

                                    <div class="
                                        flex
                                        items-center
                                        gap-6
                                    ">

                                        <span class="
                                            font-mono
                                            text-xs
                                            text-white/20
                                        ">

                                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                                        </span>


                                        <span class="
                                            text-white/60
                                            group-hover:text-white
                                            transition
                                        ">

                                            {{ $feature }}

                                        </span>

                                    </div>


                                    <span class="
                                        text-white/15
                                        group-hover:text-white/50
                                        transition
                                    ">
                                        →
                                    </span>

                                </div>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- ================= TECH STACK ================= -->

        <section
            class="
                border-t
                border-white/[0.06]
                py-24
            "
        >

            <div class="
                max-w-7xl
                mx-auto
                px-5
                lg:px-8
            ">


                <div>

                    <span class="section-label">
                        05 — Technology
                    </span>


                    <h2 class="
                        mt-5
                        font-display
                        text-4xl
                        sm:text-5xl
                        font-bold
                        tracking-[-0.05em]
                    ">

                        Built with
                        <span class="text-white/25">
                            modern tools.
                        </span>

                    </h2>

                </div>


                <div class="
                    grid
                    grid-cols-2
                    md:grid-cols-4
                    gap-4
                    mt-12
                ">

                    @foreach($project['stack'] as $tech)

                        <div class="
                            rounded-2xl
                            border
                            border-white/[0.08]
                            bg-white/[0.02]
                            p-7
                        ">

                            <span class="
                                font-display
                                text-xl
                                font-semibold
                            ">

                                {{ $tech }}

                            </span>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>



        <!-- ================= NEXT ================= -->

        <section
            class="
                border-t
                border-white/[0.06]
                py-32
            "
        >

            <div class="
                max-w-7xl
                mx-auto
                px-5
                lg:px-8
            ">

                <a
                    href="/#projects"
                    class="
                        group
                        block
                    "
                >

                    <span class="
                        font-mono
                        text-xs
                        text-white/20
                    ">
                        BACK TO
                    </span>


                    <h2 class="
                        mt-5
                        font-display
                        text-5xl
                        sm:text-7xl
                        font-bold
                        tracking-[-0.06em]
                        transition
                        group-hover:text-white/60
                    ">

                        All Projects
                        <span class="text-white/20">
                            →
                        </span>

                    </h2>

                </a>

            </div>

        </section>

    </main>



    <!-- ================= FOOTER ================= -->

    <footer class="
        border-t
        border-white/[0.06]
        py-8
    ">

        <div class="
            max-w-7xl
            mx-auto
            px-5
            lg:px-8
            flex
            justify-between
            text-xs
            text-white/25
        ">

            <span>
                © {{ date('Y') }} Bimo Chesta Adabi
            </span>

            <span>
                Laravel
            </span>

        </div>

    </footer>

</body>
</html>
