    <!DOCTYPE html>
    <html lang="en" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Bimo Chesta Adabi — Fullstack Developer</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link
            href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap"
            rel="stylesheet"
        >
    </head>


    <body class="bg-[#080808] text-white antialiased">

        <!-- ================= NAVBAR ================= -->

        <header
            x-data="{ open: false }"
            class="fixed top-0 left-0 right-0 z-50"
        >

            <nav class="max-w-7xl mx-auto px-5 lg:px-8 py-5">

                <div class="
                    flex items-center justify-between
                    px-5 py-3
                    rounded-2xl
                    border border-white/[0.08]
                    bg-[#080808]/75
                    backdrop-blur-xl
                ">

                    <a
                        href="#home"
                        class="font-display text-xl font-bold tracking-tight"
                    >
                        BIMO<span class="text-white/30">.</span>
                    </a>


                    <div class="hidden md:flex items-center gap-8">

                        <a href="#home" class="nav-link">Home</a>
                        <a href="#about" class="nav-link">About</a>
                        <a href="#projects" class="nav-link">Projects</a>
                        <a href="#skills" class="nav-link">Skills</a>
                        <a href="#contact" class="nav-link">Contact</a>
                        <a href="#experience" class="nav-link">Experience</a>

                    </div>


                    <a
                        href="#contact"
                        class="
                            hidden md:inline-flex
                            rounded-xl
                            bg-white
                            text-black
                            px-4 py-2.5
                            text-sm
                            font-semibold
                            transition
                            hover:bg-neutral-200
                        "
                    >
                        Let's Talk
                    </a>


                    <button
                        @click="open = !open"
                        class="md:hidden"
                    >

                        <svg
                            x-show="!open"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                            />
                        </svg>


                        <svg
                            x-show="open"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18 18 6M6 6l12 12"
                            />
                        </svg>

                    </button>

                </div>


                <!-- MOBILE -->

                <div
                    x-show="open"
                    x-transition
                    class="
                        md:hidden
                        mt-3
                        p-5
                        rounded-2xl
                        border border-white/[0.08]
                        bg-[#101010]
                    "
                >

                    <div class="flex flex-col gap-5">

                        <a @click="open=false" href="#home">Home</a>
                        <a @click="open=false" href="#about">About</a>
                        <a @click="open=false" href="#projects">Projects</a>
                        <a @click="open=false" href="#skills">Skills</a>
                        <a @click="open=false" href="#contact">Contact</a>
                        <a href="#experience"
    @click="open = false"
    class="block py-3 text-sm text-white/50">
        Experience
    </a>

                    </div>

                </div>

            </nav>

        </header>



        <!-- ================= HERO ================= -->

        <main>

            <section
                id="home"
                class="
                    relative
                    min-h-screen
                    flex
                    items-center
                    overflow-hidden
                "
            >

                <!-- Background -->

                <div class="absolute inset-0 pointer-events-none">

                    <div class="
                        absolute
                        left-1/2
                        top-[-300px]
                        -translate-x-1/2
                        w-[700px]
                        h-[700px]
                        rounded-full
                        bg-white/[0.035]
                        blur-[120px]
                    "></div>


                    <div class="
                        absolute
                        inset-0
                        bg-grid
                        opacity-40
                    "></div>

                </div>


                <div class="
                    relative
                    z-10
                    w-full
                    max-w-7xl
                    mx-auto
                    px-5 lg:px-8
                    pt-32
                    pb-24
                ">

                    <div class="
                        grid
                        lg:grid-cols-[1.15fr_.85fr]
                        gap-16
                        items-center
                    ">


                        <!-- HERO LEFT -->

                        <div>

                            <div class="
                                inline-flex
                                items-center
                                gap-2
                                px-3.5
                                py-2
                                rounded-full
                                border
                                border-white/[0.08]
                                bg-white/[0.025]
                                text-xs
                                text-white/45
                                mb-8
                            ">

                                <span
                                    class="
                                        w-1.5
                                        h-1.5
                                        rounded-full
                                        bg-emerald-400
                                        animate-pulse
                                    "
                                ></span>

                                Open to opportunities

                            </div>


                            <p class="
                                text-sm
                                uppercase
                                tracking-[0.35em]
                                text-white/30
                            ">
                                Hello, I'm
                            </p>


                            <h1 class="
                                mt-5
                                font-display
                                text-[clamp(4rem,9vw,8rem)]
                                leading-[0.82]
                                tracking-[-0.07em]
                                font-bold
                            ">

                                Bimo

                                <span class="text-white/20">
                                    .
                                </span>

                                <br>

                                <span class="text-white/35">
                                    Chesta
                                </span>

                            </h1>


                            <div class="mt-9">

                                <h2 class="
                                    font-display
                                    text-2xl
                                    sm:text-3xl
                                    font-semibold
                                    text-white/90
                                ">
                                    Fullstack Developer
                                </h2>


                                <p class="
                                    mt-4
                                    max-w-xl
                                    text-base
                                    sm:text-lg
                                    leading-8
                                    text-white/40
                                ">
                                    I build modern web and mobile applications
                                    across the entire development stack —
                                    from user interfaces to backend systems.
                                </p>

                            </div>


                            <!-- CTA -->

                            <div class="
                                flex
                                flex-wrap
                                gap-4
                                mt-9
                            ">

                                <a
                                    href="#projects"
                                    class="
                                        group
                                        inline-flex
                                        items-center
                                        gap-3
                                        rounded-xl
                                        bg-white
                                        text-black
                                        px-6
                                        py-3.5
                                        text-sm
                                        font-semibold
                                        transition
                                        hover:bg-neutral-200
                                    "
                                >

                                    Explore My Work

                                    <span class="
                                        transition
                                        group-hover:translate-x-1
                                    ">
                                        →
                                    </span>

                                </a>


                                <a
                                    href="#contact"
                                    class="
                                        inline-flex
                                        items-center
                                        rounded-xl
                                        border
                                        border-white/10
                                        bg-white/[0.025]
                                        px-6
                                        py-3.5
                                        text-sm
                                        font-semibold
                                        text-white/70
                                        transition
                                        hover:bg-white/[0.06]
                                        hover:text-white
                                    "
                                >
                                    Get In Touch
                                </a>

                            </div>


                            <!-- STACK -->

                            <div class="
                                mt-12
                                flex
                                flex-wrap
                                gap-x-6
                                gap-y-3
                                text-xs
                                uppercase
                                tracking-[0.12em]
                                text-white/25
                            ">

                                <span>Laravel</span>
                                <span>PHP</span>
                                <span>JavaScript</span>
                                <span>Kotlin</span>
                                <span>MySQL</span>

                            </div>

                        </div>



                        <!-- HERO RIGHT -->

                        <div class="relative hidden lg:block">

                            <div class="
                                relative
                                mx-auto
                                w-[420px]
                                h-[520px]
                            ">

                                <!-- FRAME -->

                                <div class="
                                    absolute
                                    inset-0
                                    rounded-[2rem]
                                    border
                                    border-white/[0.08]
                                    rotate-3
                                "></div>


                                <!-- PROFILE -->

                                <div class="
                                    absolute
                                    inset-4
                                    overflow-hidden
                                    rounded-[1.7rem]
                                    border
                                    border-white/10
                                    bg-[#111]
                                ">

                                    <img
                                        src="/images/profile.jpg"
                                        alt="Bimo Chesta Adabi"
                                        class="
                                            w-full
                                            h-full
                                            object-cover
                                            grayscale
                                            opacity-80
                                        "
                                        onerror="this.style.display='none'"
                                    >


                                    <!-- fallback -->

                                    <div class="
                                        absolute
                                        inset-0
                                        flex
                                        items-center
                                        justify-center
                                        bg-gradient-to-br
                                        from-white/[0.07]
                                        to-transparent
                                    ">

                                        <span class="
                                            font-display
                                            text-8xl
                                            font-bold
                                            text-white/[0.06]
                                        ">
                                        </span>

                                    </div>


                                    <!-- Overlay -->

                                    <div class="
                                        absolute
                                        inset-0
                                        bg-gradient-to-t
                                        from-black
                                        via-transparent
                                        to-transparent
                                    "></div>


                                    <div class="
                                        absolute
                                        bottom-7
                                        left-7
                                        right-7
                                    ">

                                        <p class="
                                            text-xs
                                            uppercase
                                            tracking-[0.25em]
                                            text-white/30
                                        ">
                                            Fullstack Developer
                                        </p>

                                        <p class="
                                            mt-2
                                            font-display
                                            text-2xl
                                            font-semibold
                                        ">
                                            Web × Mobile
                                        </p>

                                    </div>

                                </div>


                                <!-- FLOATING CARD -->

                                <div class="
                                    absolute
                                    -right-10
                                    top-16
                                    rounded-2xl
                                    border
                                    border-white/10
                                    bg-[#111]/90
                                    backdrop-blur-xl
                                    px-5
                                    py-4
                                ">

                                    <p class="
                                        font-mono
                                        text-[10px]
                                        text-white/25
                                    ">
                                        CURRENT FOCUS
                                    </p>

                                    <p class="
                                        mt-1
                                        text-sm
                                        font-medium
                                    ">
                                        Fullstack Development
                                    </p>

                                </div>


                                <div class="
                                    absolute
                                    -left-10
                                    bottom-20
                                    rounded-2xl
                                    border
                                    border-white/10
                                    bg-[#111]/90
                                    backdrop-blur-xl
                                    px-5
                                    py-4
                                ">

                                    <p class="
                                        font-mono
                                        text-[10px]
                                        text-white/25
                                    ">
                                        STACK
                                    </p>

                                    <p class="
                                        mt-1
                                        text-sm
                                        font-medium
                                    ">
                                        Laravel · Kotlin
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="
                    absolute
                    bottom-8
                    left-1/2
                    -translate-x-1/2
                    font-mono
                    text-[10px]
                    tracking-[0.4em]
                    text-white/20
                    uppercase
                ">
                    Scroll to explore
                </div>

            </section>



            <!-- ================= ABOUT ================= -->

    <section
        id="about"
        class="reveal relative border-t border-white/[0.06] py-28 sm:py-36"
    >

                <div class="max-w-7xl mx-auto px-5 lg:px-8">

                    <div class="
                        grid
                        lg:grid-cols-[.65fr_1.35fr]
                        gap-16
                    ">


                        <div>

                            <span class="section-label">
                                01 — About
                            </span>

                            <h2 class="section-title">
                                Building with
                                <span>purpose.</span>
                            </h2>

                        </div>


                        <div>

                            <p class="
                                font-display
                                text-2xl
                                sm:text-3xl
                                leading-relaxed
                                text-white/75
                            ">
                                I enjoy turning ideas into working digital
                                products — connecting thoughtful interfaces
                                with reliable backend systems.
                            </p>


                            <p class="
                                mt-8
                                max-w-2xl
                                text-white/40
                                leading-8
                            ">
                                I'm an Application Software Engineering graduate
                                with experience across web development, mobile
                                development, and UI/UX. My current focus is
                                growing as a Fullstack Developer and building
                                products that are practical, maintainable,
                                and useful.
                            </p>


                            <div class="
                                grid
                                sm:grid-cols-3
                                gap-4
                                mt-12
                            ">

                                <div class="stat-card">

                                    <p class="stat-number">
                                        WEB
                                    </p>

                                    <p class="stat-description">
                                        Fullstack Development
                                    </p>

                                </div>


                                <div class="stat-card">

                                    <p class="stat-number">
                                        MOBILE
                                    </p>

                                    <p class="stat-description">
                                        Android Development
                                    </p>

                                </div>


                                <div class="stat-card">

                                    <p class="stat-number">
                                        UI/UX
                                    </p>

                                    <p class="stat-description">
                                        Product Design
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>



            <!-- ================= PROJECTS ================= -->

    <section
        id="projects"
        class="reveal relative border-t border-white/[0.06] py-28 sm:py-36"
    >

                <div class="max-w-7xl mx-auto px-5 lg:px-8">


                    <div class="
                        flex
                        flex-col
                        lg:flex-row
                        lg:items-end
                        justify-between
                        gap-8
                        mb-16
                    ">

                        <div>

                            <span class="section-label">
                                02 — Website and Mobile Projects
                            </span>

                            <h2 class="section-title">
                                Things I've
                                <span>built.</span>
                            </h2>

                        </div>


                        <p class="
                            max-w-md
                            text-sm
                            leading-7
                            text-white/35
                        ">
                            A selection of projects covering web,
                            mobile, backend systems, and digital
                            product design.
                        </p>

                    </div>



                    <!-- BLOODCONNECT -->

                    <article class="
                        project-feature
                        group
                    ">

                        <div class="project-visual">

                            <img
                                src="/images/bloodconnect.jpg"
                                alt="BloodConnect"
                                class="project-image"
                                onerror="this.style.display='none'"
                            >

                            <div class="project-overlay"></div>


                            <div class="project-fallback">

                                <span>
                                    01
                                </span>

                                <strong>
                                    BloodConnect
                                </strong>

                                <p>
                                    Blood Donor Information System
                                </p>

                            </div>

                        </div>


                        <div class="p-8 lg:p-10">

                            <div class="
                                flex
                                flex-wrap
                                gap-2
                                mb-6
                            ">

                                <span class="tag">
                                    Laravel
                                </span>

                                <span class="tag">
                                    PHP
                                </span>

                                <span class="tag">
                                    MySQL
                                </span>

                                <span class="tag">
                                    Tailwind
                                </span>

                            </div>


                            <div class="
                                flex
                                flex-col
                                lg:flex-row
                                lg:items-end
                                justify-between
                                gap-8
                            ">

                                <div>

                                    <h3 class="
                                        font-display
                                        text-3xl
                                        font-semibold
                                    ">
                                        BloodConnect
                                    </h3>


                                    <p class="
                                        mt-4
                                        max-w-2xl
                                        text-white/40
                                        leading-7
                                    ">
                                        A web-based blood donor information
                                        system designed to manage donor data
                                        and provide blood availability
                                        information for recipients.
                                    </p>

                                </div>


                                                            <a
                                    href="/projects/bloodconnect"
                                    class="project-link"
                                >
                                    View Case Study →
                                </a>

                            </div>

                        </div>

                    </article>



                    <!-- TWO PROJECTS -->

                    <div class="
                        grid
                        md:grid-cols-2
                        gap-8
                        mt-8
                    ">


                        <!-- TELUFJB -->

                        <article class="project-card group">

                            <div class="project-visual-small">

                                <img
                                    src="/images/telufjb.png"
                                    alt="TeluFJB"
                                    class="project-image"
                                    onerror="this.style.display='none'"
                                >

                                <div class="project-overlay"></div>


                                <div class="project-fallback">

                                    <span>02</span>

                                    <strong>
                                        TeluFJB
                                    </strong>

                                </div>

                            </div>


                            <div class="p-7">

                                <div class="flex gap-2 mb-5">

                                    <span class="tag">
                                        Kotlin
                                    </span>

                                    <span class="tag">
                                        Firebase
                                    </span>

                                </div>


                                <h3 class="
                                    font-display
                                    text-2xl
                                    font-semibold
                                ">
                                    TeluFJB
                                </h3>


                                <p class="
                                    mt-3
                                    text-sm
                                    leading-7
                                    text-white/35
                                ">
                                    Android marketplace platform
                                    designed for Telkom University
                                    students.
                                </p>


                                <a
                                    href="/projects/telufjb"
                                    class="project-link inline-block mt-6"
                                >
                                    View Case Study →
                                </a>

                            </div>

                        </article>

                        <!-- DISTANHORTI -->

                        <article class="project-card group">

                            <div class="project-visual-small">

                                <img
                                    src="/images/distanthorti.jpg"
                                    alt="Distanhorti"
                                    class="project-image"
                                    onerror="this.style.display='none'"
                                >

                                <div class="project-overlay"></div>


                                <div class="project-fallback">

                                    <span>03</span>

                                    <strong>
                                        Distanhorti
                                    </strong>

                                </div>

                            </div>


                            <div class="p-7">

                                <div class="flex gap-2 mb-5">

                                    <span class="tag">
                                        Laravel
                                    </span>

                                    <span class="tag">
                                        Tailwind
                                    </span>

                                    <span class="tag">
                                        UI/UX
                                    </span>

                                </div>


                                <h3 class="
                                    font-display
                                    text-2xl
                                    font-semibold
                                ">
                                    Distanhorti Website
                                </h3>


                                <p class="
                                    mt-3
                                    text-sm
                                    leading-7
                                    text-white/35
                                ">
                                    Website redesign focused on
                                    information architecture and
                                    user experience.
                                </p>


                                <a
                                    href="/projects/distanhorti"
                                    class="project-link inline-block mt-6"
                                >
                                    View Case Study →
                                </a>

                            </div>

                        </article>

                    </div>

                </div>

            </section>

           {{-- ================= UI/UX PROJECTS ================= --}}

<section
    id="uiux"
    class="reveal relative border-t border-white/[0.06] py-28 sm:py-36"
>

    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        {{-- HEADER --}}
        <div class="
            flex
            flex-col
            lg:flex-row
            lg:items-end
            justify-between
            gap-8
            mb-16
        ">

            <div>

                <span class="section-label">
                    UI/UX Projects
                </span>

                <h2 class="section-title">
                    Designing better
                    <span>digital experiences.</span>
                </h2>

            </div>


            <p class="
                max-w-md
                text-sm
                leading-7
                text-white/35
            ">
                A collection of interface and user experience projects
                focused on research, information architecture,
                wireframing, prototyping, and usability.
            </p>

        </div>


        {{-- PROJECT GRID --}}
        <div class="grid md:grid-cols-2 gap-8">


            {{-- TEL USED --}}
            <article class="project-card group">

                <div class="project-visual-small">

                    <img
                        src="/images/telused.jpg"
                        alt="Tel Used"
                        class="project-image"
                        onerror="this.style.display='none'"
                    >

                    <div class="project-overlay"></div>

                    <div class="project-fallback">

                        <span>01</span>

                        <strong>
                            Tel Used
                        </strong>

                        <p>
                            UI/UX Design Project
                        </p>

                    </div>

                    <div class="absolute left-5 top-5 z-30">

                        <span class="
                            rounded-full
                            border border-white/10
                            bg-black/30
                            px-3 py-1.5
                            font-mono
                            text-[10px]
                            tracking-[0.2em]
                            text-white/60
                            backdrop-blur-md
                        ">
                            01
                        </span>

                    </div>

                </div>


                <div class="p-7">

                    <div class="flex flex-wrap gap-2 mb-5">

                        <span class="tag">UI/UX</span>
                        <span class="tag">Figma</span>
                        <span class="tag">Research</span>

                    </div>


                    <h3 class="
                        font-display
                        text-2xl
                        font-semibold
                    ">
                        Tel Used
                    </h3>


                    <p class="
                        mt-3
                        text-sm
                        leading-7
                        text-white/35
                    ">
                        UI/UX project focused on designing a digital
                        experience for Telkom University users.
                    </p>


                    <a
                        href="https://www.figma.com/design/QQja6tl1EOxSlRWy5QEGlN/Telkom?node-id=0-1&t=XC9MalN28VHPZr5x-1"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="project-link inline-block mt-6"
                    >
                        View Project ↗
                    </a>

                </div>

            </article>



            {{-- OPEN LIBRARY --}}
            <article class="project-card group">

                <div class="project-visual-small">

                    <img
                        src="/images/openlib.jpg"
                        alt="Open Library Telkom University"
                        class="project-image"
                        onerror="this.style.display='none'"
                    >

                    <div class="project-overlay"></div>

                    <div class="project-fallback">

                        <span>02</span>

                        <strong>
                            Open Library
                        </strong>

                        <p>
                            Telkom University
                        </p>

                    </div>


                    <div class="absolute left-5 top-5 z-30">

                        <span class="
                            rounded-full
                            border border-white/10
                            bg-black/30
                            px-3 py-1.5
                            font-mono
                            text-[10px]
                            tracking-[0.2em]
                            text-white/60
                            backdrop-blur-md
                        ">
                            02
                        </span>

                    </div>

                </div>


                <div class="p-7">

                    <div class="flex flex-wrap gap-2 mb-5">

                        <span class="tag">UI/UX</span>
                        <span class="tag">Figma</span>
                        <span class="tag">Prototyping</span>

                    </div>


                    <h3 class="
                        font-display
                        text-2xl
                        font-semibold
                    ">
                        Open Library Telkom University
                    </h3>


                    <p class="
                        mt-3
                        text-sm
                        leading-7
                        text-white/35
                    ">
                        Interface redesign project focused on improving
                        the experience of accessing library resources.
                    </p>


                    <a
                        href="https://www.figma.com/design/QQja6tl1EOxSlRWy5QEGlN/Telkom?node-id=1-2&t=XC9MalN28VHPZr5x-1"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="project-link inline-block mt-6"
                    >
                        View Project ↗
                    </a>

                </div>

            </article>



            {{-- TEL IVERY --}}
            <article class="project-card group">

                <div class="project-visual-small">

                    <img
                        src="/images/telivery.jpg"
                        alt="Tel Ivery"
                        class="project-image"
                        onerror="this.style.display='none'"
                    >

                    <div class="project-overlay"></div>

                    <div class="project-fallback">

                        <span>03</span>

                        <strong>
                            Tel Ivery
                        </strong>

                        <p>
                            UI/UX Design Project
                        </p>

                    </div>


                    <div class="absolute left-5 top-5 z-30">

                        <span class="
                            rounded-full
                            border border-white/10
                            bg-black/30
                            px-3 py-1.5
                            font-mono
                            text-[10px]
                            tracking-[0.2em]
                            text-white/60
                            backdrop-blur-md
                        ">
                            03
                        </span>

                    </div>

                </div>


                <div class="p-7">

                    <div class="flex flex-wrap gap-2 mb-5">

                        <span class="tag">UI/UX</span>
                        <span class="tag">Figma</span>
                        <span class="tag">Prototyping</span>

                    </div>


                    <h3 class="
                        font-display
                        text-2xl
                        font-semibold
                    ">
                        Tel Ivery
                    </h3>


                    <p class="
                        mt-3
                        text-sm
                        leading-7
                        text-white/35
                    ">
                        Digital product design project focused on
                        creating a clear and intuitive user experience.
                    </p>


                    <a
                        href="https://www.figma.com/design/QQja6tl1EOxSlRWy5QEGlN/Telkom?node-id=1-3&t=XC9MalN28VHPZr5x-1"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="project-link inline-block mt-6"
                    >
                        View Project ↗
                    </a>

                </div>

            </article>



            {{-- DISTANHORTI --}}
            <article class="project-card group">

                <div class="project-visual-small">

                    <img
                        src="/images/distanthorti.jpg"
                        alt="Distanhorti Website"
                        class="project-image"
                        onerror="this.style.display='none'"
                    >

                    <div class="project-overlay"></div>

                    <div class="project-fallback">

                        <span>04</span>

                        <strong>
                            Distanhorti
                        </strong>

                        <p>
                            Website Redesign
                        </p>

                    </div>


                    <div class="absolute left-5 top-5 z-30">

                        <span class="
                            rounded-full
                            border border-white/10
                            bg-black/30
                            px-3 py-1.5
                            font-mono
                            text-[10px]
                            tracking-[0.2em]
                            text-white/60
                            backdrop-blur-md
                        ">
                            04
                        </span>

                    </div>

                </div>


                <div class="p-7">

                    <div class="flex flex-wrap gap-2 mb-5">

                        <span class="tag">UI/UX</span>
                        <span class="tag">Figma</span>
                        <span class="tag">Laravel</span>

                    </div>


                    <h3 class="
                        font-display
                        text-2xl
                        font-semibold
                    ">
                        Distanhorti Website
                    </h3>


                    <p class="
                        mt-3
                        text-sm
                        leading-7
                        text-white/35
                    ">
                        Website redesign focused on information
                        architecture, navigation, and user experience.
                    </p>


                    <a
                        href="https://www.figma.com/design/2cKCVSXlKZ7ljOY7THK0Gt/Wajib--TA-?node-id=68-401&t=XC9MalN28VHPZr5x-1"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="project-link inline-block mt-6"
                    >
                        View Project ↗
                    </a>

                </div>

            </article>


        </div>

    </div>

</section>

            <!-- ================= SKILLS ================= -->

    <section
        id="skills"
        class="reveal relative border-t border-white/[0.06] py-28 sm:py-36"
    >

                <div class="max-w-7xl mx-auto px-5 lg:px-8">

                    <div class="
                        grid
                        lg:grid-cols-[.65fr_1.35fr]
                        gap-16
                    ">


                        <div>

                            <span class="section-label">
                                03 — Skills
                            </span>

                            <h2 class="section-title">
                                My technical
                                <span>stack.</span>
                            </h2>

                        </div>


                        <div class="
                            grid
                            sm:grid-cols-2
                            gap-4
                        ">


                            <div class="skill-card">

                                <span>01</span>

                                <h3>
                                    Frontend
                                </h3>

                                <p>
                                    HTML · CSS · JavaScript ·
                                    Tailwind CSS · Blade
                                </p>

                            </div>


                            <div class="skill-card">

                                <span>02</span>

                                <h3>
                                    Backend
                                </h3>

                                <p>
                                    PHP · Laravel · REST API ·
                                    MySQL
                                </p>

                            </div>


                            <div class="skill-card">

                                <span>03</span>

                                <h3>
                                    Mobile
                                </h3>

                                <p>
                                    Kotlin · Android ·
                                    Jetpack Compose
                                </p>

                            </div>


                            <div class="skill-card">

                                <span>04</span>

                                <h3>
                                    Tools
                                </h3>

                                <p>
                                    Git · GitHub · Figma ·
                                    VS Code
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

    {{-- EXPERIENCE --}}
    <section
        id="experience"
        class="reveal relative border-t border-white/[0.06] py-28 sm:py-36"
    >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="max-w-3xl">
                <p class="section-label">04 — Experience</p>

                <h2 class="section-title">
                    Experience that <span>builds real skills.</span>
                </h2>
            </div>

            <div class="mt-16 space-y-4">

                {{-- EXPERIENCE 01 --}}
    <div class="group rounded-3xl border border-white/[0.08] bg-white/[0.02] p-6 sm:p-8 transition duration-500 hover:-translate-y-1 hover:border-white/[0.15]">

        <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">

            <div>

                <div class="flex items-center gap-3">

                    <span class="font-mono text-[10px] text-white/20">
                        01
                    </span>

                    <span class="text-xs uppercase tracking-[0.2em] text-white/25">
                        Internship
                    </span>

                </div>


                <h3 class="mt-6 font-display text-2xl font-semibold">
                    Fullstack Developer
                </h3>


                <p class="mt-2 text-sm text-white/35">
                    Balai Perlindungan Tanaman dan Hortikultura
                    Provinsi Jawa Barat
                </p>

            </div>


            <span class="font-mono text-xs text-white/25">
                2026
            </span>

        </div>


        <p class="mt-8 max-w-3xl text-sm leading-7 text-white/35">
            Worked on the development and redesign of the official BPTPH
            website, combining frontend development with UI/UX design.
            Responsible for designing the interface, organizing information
            structure, implementing responsive pages, and developing the
            website using Laravel, Tailwind CSS, and JavaScript.
        </p>


        <div class="mt-6 flex flex-wrap gap-2">

            <span class="tag">
                Laravel
            </span>

            <span class="tag">
                PHP
            </span>

            <span class="tag">
                Tailwind CSS
            </span>

            <span class="tag">
                JavaScript
            </span>

            <span class="tag">
                Figma
            </span>

            <span class="tag">
                UI/UX
            </span>

        </div>

    </div>

                {{-- EXPERIENCE 02 --}}
                <div class="group rounded-3xl border border-white/[0.08] bg-white/[0.02] p-6 sm:p-8 transition duration-500 hover:-translate-y-1 hover:border-white/[0.15]">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">

                        <div>
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-[10px] text-white/20">02</span>
                                <span class="text-xs uppercase tracking-[0.2em] text-white/25">
                                    Experience
                                </span>
                            </div>

                            <h3 class="mt-6 font-display text-2xl font-semibold">
                                Web Programming Assistant
                            </h3>

                            <p class="mt-2 text-sm text-white/35">
                                Telkom University
                            </p>
                        </div>

                        <span class="font-mono text-xs text-white/25">
                            2025 — 2026
                        </span>
                    </div>

                    <p class="mt-8 max-w-3xl text-sm leading-7 text-white/35">
                        Assisted students during web programming practical sessions,
                        explained programming concepts, helped troubleshoot implementation
                        issues, and supported project development.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">PHP</span>
                        <span class="tag">Web Development</span>
                    </div>
                </div>

                {{-- EXPERIENCE 03 --}}
                <div class="group rounded-3xl border border-white/[0.08] bg-white/[0.02] p-6 sm:p-8 transition duration-500 hover:-translate-y-1 hover:border-white/[0.15]">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">

                        <div>
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-[10px] text-white/20">03</span>
                                <span class="text-xs uppercase tracking-[0.2em] text-white/25">
                                    Experience
                                </span>
                            </div>

                            <h3 class="mt-6 font-display text-2xl font-semibold">
                                UI/UX Designer
                            </h3>

                            <p class="mt-2 text-sm text-white/35">
                                Chevalier Lab — Telkom University
                            </p>
                        </div>

                        <span class="font-mono text-xs text-white/25">
                            2024 — 2025
                        </span>
                    </div>

                    <p class="mt-8 max-w-3xl text-sm leading-7 text-white/35">
                        Worked on interface and user experience projects involving user research,
                        wireframing, prototyping, usability testing, and interface design using Figma.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="tag">Figma</span>
                        <span class="tag">User Research</span>
                        <span class="tag">Wireframing</span>
                        <span class="tag">Prototyping</span>
                        <span class="tag">Usability Testing</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- EDUCATION --}}
    <section
        id="education"
        class="reveal relative border-t border-white/[0.06] py-28 sm:py-36"
    >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="max-w-3xl">
                <p class="section-label">05 — Education</p>

                <h2 class="section-title">
                    Where I <span>started building.</span>
                </h2>
            </div>

            <div class="mt-16 rounded-3xl border border-white/[0.08] bg-white/[0.02] p-7 sm:p-10">

                <div class="flex flex-col gap-6 sm:flex-row sm:items-start sm:justify-between">

                    <div>
                        <p class="font-mono text-[10px] uppercase tracking-[0.25em] text-white/20">
                            Diploma
                        </p>

                        <h3 class="mt-5 font-display text-2xl sm:text-3xl font-semibold">
                            Rekayasa Perangkat Lunak Aplikasi
                        </h3>

                        <p class="mt-3 text-white/40">
                            Telkom University
                        </p>
                    </div>

                    <span class="font-mono text-xs text-white/25">
                        D3
                    </span>

                </div>

                <div class="mt-8 border-t border-white/[0.06] pt-8">
                    <p class="max-w-3xl text-sm leading-7 text-white/35">
                        Focused on software development, web development, mobile application
                        development, databases, software engineering, and user interface design.
                    </p>
                </div>

            </div>
        </div>
    </section>

            <!-- ================= CONTACT ================= -->

    <section
        id="contact"
        class="reveal relative border-t border-white/[0.06] py-28 sm:py-36"
    >

                <div class="
                    max-w-4xl
                    mx-auto
                    px-5
                    text-center
                ">

                    <span class="section-label">
                        06 — Contact
                    </span>


                    <h2 class="
                        mt-6
                        font-display
                        text-5xl
                        sm:text-7xl
                        font-bold
                        tracking-[-0.06em]
                    ">

                        Let's build
                        <span class="text-white/25">
                            something.
                        </span>

                    </h2>


                    <p class="
                        max-w-xl
                        mx-auto
                        mt-7
                        text-white/35
                        leading-7
                    ">
                        Have a project, opportunity, or idea?
                        Feel free to reach out.
                    </p>


                    <a
                        href="mailto:your@email.com"
                        class="
                            inline-flex
                            mt-9
                            rounded-xl
                            bg-white
                            text-black
                            px-7
                            py-4
                            font-semibold
                            transition
                            hover:bg-neutral-200
                        "
                    >
                        Start a conversation →
                    </a>


                    <div class="
                        flex
                        justify-center
                        gap-8
                        mt-12
                        text-sm
                        text-white/35
                    ">

                        <a href="https://github.com/BimoChesta"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="rounded-full border border-white/[0.08] bg-white/[0.02] px-5 py-3 text-sm text-white/50 transition hover:border-white/[0.18] hover:text-white">
                            GitHub ↗
                        </a>

                        <a href="https://www.linkedin.com/in/bimo-chesta-adabi-b0a847297/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="rounded-full border border-white/[0.08] bg-white/[0.02] px-5 py-3 text-sm text-white/50 transition hover:border-white/[0.18] hover:text-white">
                            LinkedIn ↗
                        </a>

                        <a href="mailto:bimo74755@gmail.com"
                        class="rounded-full border border-white/[0.08] bg-white/[0.02] px-5 py-3 text-sm text-white/50 transition hover:border-white/[0.18] hover:text-white">
                            Email ↗
                        </a>

                    </div>

                </div>

            </section>

        </main>



        <!-- ================= FOOTER ================= -->

        <footer class="border-t border-white/[0.06]">

            <div class="
                max-w-7xl
                mx-auto
                px-5 lg:px-8
                py-8
                flex
                flex-col
                sm:flex-row
                justify-between
                gap-4
                text-xs
                text-white/25
            ">

                <p>
                    © {{ date('Y') }} Bimo Chesta Adabi
                </p>

                <p>
                    Designed & built with Laravel.
                </p>

            </div>

        </footer>

    </body>
    </html>
