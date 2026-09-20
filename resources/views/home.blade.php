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
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >
</head>

<body class="bg-[#080808] text-white antialiased">

    <!-- ================= NAVBAR ================= -->

    <header
        x-data="{ open: false }"
        class="fixed top-0 left-0 right-0 z-50"
    >

        <nav class="mx-auto max-w-7xl px-6 lg:px-10 py-5">

            <div class="
                flex items-center justify-between
                rounded-2xl border border-white/10
                bg-black/60 backdrop-blur-xl
                px-5 py-3
            ">

                <!-- Logo -->

                <a
                    href="#home"
                    class="font-display text-xl font-bold tracking-tight"
                >
                    BIMO<span class="text-white/30">.</span>
                </a>


                <!-- Desktop Navigation -->

                <div class="hidden md:flex items-center gap-8">

                    <a href="#home"
                       class="nav-link">
                        Home
                    </a>

                    <a href="#about"
                       class="nav-link">
                        About
                    </a>

                    <a href="#projects"
                       class="nav-link">
                        Projects
                    </a>

                    <a href="#skills"
                       class="nav-link">
                        Skills
                    </a>

                    <a href="#contact"
                       class="nav-link">
                        Contact
                    </a>

                </div>


                <!-- Desktop Contact -->

                <a
                    href="#contact"
                    class="
                        hidden md:inline-flex
                        items-center gap-2
                        rounded-xl
                        bg-white text-black
                        px-4 py-2.5
                        text-sm font-semibold
                        transition duration-300
                        hover:bg-neutral-200
                    "
                >
                    Let's Talk
                </a>


                <!-- Mobile Button -->

                <button
                    @click="open = !open"
                    class="md:hidden text-white"
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


            <!-- Mobile Navigation -->

            <div
                x-show="open"
                x-transition
                class="
                    md:hidden mt-3
                    rounded-2xl border border-white/10
                    bg-[#101010]/95 backdrop-blur-xl
                    p-5
                "
            >

                <div class="flex flex-col gap-5">

                    <a @click="open=false" href="#home">
                        Home
                    </a>

                    <a @click="open=false" href="#about">
                        About
                    </a>

                    <a @click="open=false" href="#projects">
                        Projects
                    </a>

                    <a @click="open=false" href="#skills">
                        Skills
                    </a>

                    <a @click="open=false" href="#contact">
                        Contact
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
                relative min-h-screen
                flex items-center
                overflow-hidden
            "
        >

            <!-- Background -->

            <div class="absolute inset-0 pointer-events-none">

                <div class="
                    absolute
                    top-[-300px]
                    left-1/2
                    -translate-x-1/2
                    w-[700px]
                    h-[700px]
                    rounded-full
                    bg-white/[0.035]
                    blur-3xl
                "></div>

                <div class="
                    absolute
                    inset-0
                    bg-grid
                    opacity-30
                "></div>

            </div>


            <div class="
                relative z-10
                max-w-7xl
                mx-auto
                px-6 lg:px-10
                pt-32 pb-20
                w-full
            ">

                <div class="
                    grid
                    lg:grid-cols-[1.15fr_.85fr]
                    gap-16
                    items-center
                ">

                    <!-- Left -->

                    <div>

                        <div class="
                            inline-flex items-center gap-2
                            rounded-full
                            border border-white/10
                            bg-white/[0.03]
                            px-4 py-2
                            text-xs
                            text-white/60
                            mb-8
                        ">

                            <span class="
                                w-2 h-2
                                rounded-full
                                bg-emerald-400
                                animate-pulse
                            "></span>

                            Available for opportunities

                        </div>


                        <p class="
                            text-sm
                            uppercase
                            tracking-[0.3em]
                            text-white/40
                            mb-5
                        ">
                            Hello, I'm
                        </p>


                        <h1 class="
                            font-display
                            text-5xl
                            sm:text-6xl
                            lg:text-8xl
                            font-bold
                            tracking-[-0.06em]
                            leading-[0.9]
                        ">

                            Bimo
                            <br>

                            <span class="text-white/35">
                                Chesta.
                            </span>

                        </h1>


                        <div class="mt-8 max-w-2xl">

                            <h2 class="
                                text-xl
                                sm:text-2xl
                                font-medium
                                text-white/80
                            ">
                                Fullstack Developer
                            </h2>

                            <p class="
                                mt-4
                                text-base
                                sm:text-lg
                                leading-8
                                text-white/45
                            ">
                                I build modern web and mobile applications,
                                turning ideas into functional digital products
                                from frontend to backend.
                            </p>

                        </div>


                        <!-- CTA -->

                        <div class="
                            flex flex-wrap
                            gap-4
                            mt-10
                        ">

                            <a
                                href="#projects"
                                class="
                                    group
                                    inline-flex
                                    items-center gap-3
                                    rounded-xl
                                    bg-white
                                    text-black
                                    px-6 py-3.5
                                    font-semibold
                                    transition
                                    hover:bg-neutral-200
                                "
                            >

                                View Projects

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
                                    gap-3
                                    rounded-xl
                                    border border-white/10
                                    bg-white/[0.03]
                                    px-6 py-3.5
                                    font-semibold
                                    text-white/80
                                    transition
                                    hover:bg-white/[0.08]
                                "
                            >
                                Let's Connect
                            </a>

                        </div>


                        <!-- Tech -->

                        <div class="
                            flex flex-wrap
                            gap-x-5 gap-y-3
                            mt-12
                            text-sm
                            text-white/30
                        ">

                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>JavaScript</span>
                            <span>Kotlin</span>
                            <span>MySQL</span>
                            <span>Tailwind CSS</span>

                        </div>

                    </div>


                    <!-- Right -->

                    <div class="relative hidden lg:block">

                        <div class="
                            relative
                            aspect-square
                            max-w-[520px]
                            ml-auto
                        ">

                            <!-- Outer circle -->

                            <div class="
                                absolute inset-8
                                rounded-full
                                border border-white/10
                            "></div>

                            <div class="
                                absolute inset-20
                                rounded-full
                                border border-white/5
                            "></div>


                            <!-- Code card -->

                            <div class="
                                absolute
                                top-1/2
                                left-1/2
                                -translate-x-1/2
                                -translate-y-1/2
                                w-[340px]
                                rounded-3xl
                                border border-white/10
                                bg-[#111]/90
                                backdrop-blur-xl
                                shadow-2xl
                                p-6
                            ">

                                <div class="
                                    flex items-center gap-2
                                    mb-6
                                ">

                                    <span class="w-3 h-3 rounded-full bg-white/20"></span>
                                    <span class="w-3 h-3 rounded-full bg-white/20"></span>
                                    <span class="w-3 h-3 rounded-full bg-white/20"></span>

                                </div>


                                <div class="
                                    font-mono
                                    text-sm
                                    leading-8
                                    text-white/50
                                ">

                                    <div>
                                        <span class="text-white/30">01</span>
                                        <span class="text-purple-300">
                                            class
                                        </span>
                                        <span class="text-white">
                                            Developer
                                        </span>
                                    </div>

                                    <div>
                                        <span class="text-white/30">02</span>
                                        {
                                    </div>

                                    <div>
                                        <span class="text-white/30">03</span>
                                        &nbsp;&nbsp;name:
                                        <span class="text-emerald-300">
                                            "Bimo"
                                        </span>
                                    </div>

                                    <div>
                                        <span class="text-white/30">04</span>
                                        &nbsp;&nbsp;role:
                                        <span class="text-emerald-300">
                                            "Fullstack"
                                        </span>
                                    </div>

                                    <div>
                                        <span class="text-white/30">05</span>
                                        &nbsp;&nbsp;build:
                                        <span class="text-emerald-300">
                                            "Web & Mobile"
                                        </span>
                                    </div>

                                    <div>
                                        <span class="text-white/30">06</span>
                                        }
                                    </div>

                                </div>

                            </div>


                            <!-- Floating tags -->

                            <div class="
                                absolute
                                top-10 right-0
                                rounded-xl
                                border border-white/10
                                bg-white/[0.04]
                                backdrop-blur-xl
                                px-4 py-3
                                text-sm
                                text-white/70
                            ">
                                ⚡ Laravel
                            </div>


                            <div class="
                                absolute
                                bottom-16 left-0
                                rounded-xl
                                border border-white/10
                                bg-white/[0.04]
                                backdrop-blur-xl
                                px-4 py-3
                                text-sm
                                text-white/70
                            ">
                                Kotlin / Android
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Scroll -->

            <div class="
                absolute
                bottom-8
                left-1/2
                -translate-x-1/2
                text-white/20
                text-xs
                tracking-[0.3em]
                uppercase
            ">
                Scroll
            </div>

        </section>


        <!-- ================= ABOUT ================= -->

        <section
            id="about"
            class="py-32 border-t border-white/5"
        >

            <div class="max-w-7xl mx-auto px-6 lg:px-10">

                <div class="
                    grid
                    lg:grid-cols-[.7fr_1.3fr]
                    gap-16
                ">

                    <div>

                        <span class="section-label">
                            01 — About Me
                        </span>

                        <h2 class="section-title">
                            More than just
                            <span>code.</span>
                        </h2>

                    </div>


                    <div>

                        <p class="
                            text-2xl
                            sm:text-3xl
                            leading-relaxed
                            text-white/75
                            font-medium
                        ">
                            I'm a Fullstack Developer who enjoys building
                            applications from the interface users see
                            to the backend systems that power them.
                        </p>


                        <p class="
                            mt-8
                            text-white/40
                            leading-8
                            max-w-2xl
                        ">
                            I have a background in Application Software
                            Engineering and experience working with web,
                            mobile, UI/UX, and backend development.
                            My focus is creating products that are
                            functional, maintainable, and enjoyable to use.
                        </p>


                        <div class="
                            grid
                            sm:grid-cols-3
                            gap-4
                            mt-12
                        ">

                            <div class="stat-card">
                                <strong>Web</strong>
                                <span>Development</span>
                            </div>

                            <div class="stat-card">
                                <strong>Mobile</strong>
                                <span>Development</span>
                            </div>

                            <div class="stat-card">
                                <strong>UI/UX</strong>
                                <span>Design</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ================= PROJECTS ================= -->

        <section
            id="projects"
            class="py-32 border-t border-white/5"
        >

            <div class="max-w-7xl mx-auto px-6 lg:px-10">

                <div class="
                    flex flex-col
                    md:flex-row
                    md:items-end
                    justify-between
                    gap-8
                    mb-16
                ">

                    <div>

                        <span class="section-label">
                            02 — Selected Work
                        </span>

                        <h2 class="section-title">
                            Things I've
                            <span>built.</span>
                        </h2>

                    </div>

                    <p class="
                        max-w-md
                        text-white/40
                        leading-7
                    ">
                        A collection of projects I've worked on across
                        web development, mobile applications, and
                        digital products.
                    </p>

                </div>


                <!-- Project 1 -->

                <article class="
                    project-card
                    group
                    mb-8
                ">

                    <div class="project-image">

                        <div class="project-placeholder">
                            <span>01</span>
                            <strong>BloodConnect</strong>
                        </div>

                    </div>


                    <div class="p-7 lg:p-10">

                        <div class="
                            flex flex-wrap
                            items-center
                            gap-3
                            mb-5
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

                        </div>


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
                            A web-based blood donor information system
                            designed to help manage donor data and
                            provide blood availability information.
                        </p>


                        <div class="mt-7">

                            <a
                                href="#"
                                class="project-link"
                            >
                                View Project →
                            </a>

                        </div>

                    </div>

                </article>


                <!-- Projects Grid -->

                <div class="
                    grid
                    md:grid-cols-2
                    gap-8
                ">

                    <article class="project-card group">

                        <div class="project-image">

                            <div class="project-placeholder">
                                <span>02</span>
                                <strong>TeluFJB</strong>
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

                            <h3 class="text-2xl font-semibold">
                                TeluFJB
                            </h3>

                            <p class="
                                mt-3
                                text-white/40
                                leading-7
                            ">
                                Android marketplace platform for
                                Telkom University students.
                            </p>

                        </div>

                    </article>


                    <article class="project-card group">

                        <div class="project-image">

                            <div class="project-placeholder">
                                <span>03</span>
                                <strong>Distanhorti</strong>
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

                            </div>

                            <h3 class="text-2xl font-semibold">
                                Distanhorti Website
                            </h3>

                            <p class="
                                mt-3
                                text-white/40
                                leading-7
                            ">
                                Modern website redesign focused on
                                information architecture and user experience.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </section>


        <!-- ================= SKILLS ================= -->

        <section
            id="skills"
            class="py-32 border-t border-white/5"
        >

            <div class="max-w-7xl mx-auto px-6 lg:px-10">

                <div class="
                    grid
                    lg:grid-cols-[.7fr_1.3fr]
                    gap-16
                ">

                    <div>

                        <span class="section-label">
                            03 — Skills
                        </span>

                        <h2 class="section-title">
                            My technical
                            <span>toolbox.</span>
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


        <!-- ================= CONTACT ================= -->

        <section
            id="contact"
            class="
                py-32
                border-t
                border-white/5
            "
        >

            <div class="
                max-w-5xl
                mx-auto
                px-6
                text-center
            ">

                <span class="section-label">
                    04 — Contact
                </span>


                <h2 class="
                    font-display
                    text-5xl
                    sm:text-7xl
                    font-bold
                    tracking-[-0.05em]
                    mt-6
                ">

                    Let's build
                    <span class="text-white/30">
                        something.
                    </span>

                </h2>


                <p class="
                    mt-8
                    max-w-xl
                    mx-auto
                    text-white/40
                    leading-7
                ">
                    I'm always open to discussing new opportunities,
                    interesting projects, or collaborations.
                </p>


                <a
                    href="mailto:your@email.com"
                    class="
                        inline-flex
                        items-center
                        gap-3
                        mt-10
                        rounded-xl
                        bg-white
                        text-black
                        px-7 py-4
                        font-semibold
                        transition
                        hover:bg-neutral-200
                    "
                >
                    Get in touch →
                </a>


                <div class="
                    flex
                    justify-center
                    gap-8
                    mt-12
                    text-sm
                    text-white/40
                ">

                    <a href="#" class="hover:text-white transition">
                        GitHub
                    </a>

                    <a href="#" class="hover:text-white transition">
                        LinkedIn
                    </a>

                    <a href="#" class="hover:text-white transition">
                        Instagram
                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- ================= FOOTER ================= -->

    <footer class="
        border-t
        border-white/5
        py-8
    ">

        <div class="
            max-w-7xl
            mx-auto
            px-6 lg:px-10
            flex
            flex-col
            sm:flex-row
            justify-between
            gap-4
            text-sm
            text-white/30
        ">

            <p>
                © {{ date('Y') }} Bimo Chesta Adabi.
            </p>

            <p>
                Designed & Built with Laravel.
            </p>

        </div>

    </footer>


</body>
</html>
