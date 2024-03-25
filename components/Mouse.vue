<template>
    <div class="cursor -hide">
        <div class="cursor__inner"></div>
    </div>
</template>

<script>
    export default {
        name: "Mouse",

        mounted() {
            const cursor = document.querySelector(".cursor"),
                cases = document.querySelectorAll(".item"),
                links = document.querySelectorAll(".card"),
                textlinks = document.querySelectorAll(".link"),
                mouseenlargers = document.querySelectorAll(".-enlarge-mouse"),
                canvas = document.querySelector(".cursor__wrapper"),
                cursor_inner = document.querySelector(".cursor__inner");
            
            const setCursor=e=>{
                cursor.classList.remove('-hide');
            };

            const moveCursor=e=>{
                cursor.classList.add('-active');
                let s = canvas.getBoundingClientRect(),
                    t = e.clientX-s.left,
                    r = e.clientY-s.top;
                    
                    cursor.style.transform=`translate3d(${t}px, ${r}px, 0)`
            };
            
            document.addEventListener("mousemove", moveCursor),
            document.addEventListener("mousemove", setCursor),
            
            window.addEventListener("load", moveCursor),

            cases && cases.forEach(e => {
                e.addEventListener("mouseenter", () => {
                    cursor.classList.add("-active"),
                    cursor.classList.add("-case")
                }),

                e.addEventListener("mouseleave", () => {
                    cursor.classList.remove("-active"),
                    cursor.classList.remove("-case")
                })
            })
            
            links && links.forEach(link => {
                link.addEventListener("mouseenter", () => {
                    cursor.classList.add("-active"),
                    cursor.classList.add("-link")
                }),

                link.addEventListener("mouseleave", () => {
                    cursor.classList.remove("-active"),
                    cursor.classList.remove("-link");
                })
            })
            
            textlinks && textlinks.forEach(link => {
                link.addEventListener("mouseenter", () => {
                    cursor.classList.add("-active"),
                    cursor.classList.add("-link")
                }),

                link.addEventListener("mouseleave", () => {
                    cursor.classList.remove("-active"),
                    cursor.classList.remove("-link");
                })
            })
            
            mouseenlargers && mouseenlargers.forEach(link => {
                link.addEventListener("mouseenter", () => {
                    cursor.classList.add("-active"),
                    cursor.classList.add("-link")
                }),

                link.addEventListener("mouseleave", () => {
                    cursor.classList.remove("-active"),
                    cursor.classList.remove("-link");
                })
            })
        }
    }
</script>