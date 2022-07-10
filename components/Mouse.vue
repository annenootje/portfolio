<template>
    <div class="cursor">
        <div class="cursor__inner"></div>
    </div>
</template>

<script>
    export default {
        name: "Mouse",

        mounted() {
            const cursor = document.querySelector(".cursor"),
                links = document.querySelectorAll(".link"),
                canvas = document.querySelector(".cursor__wrapper");
            
            const moveCursor=e=>{
                cursor.classList.add('-active');
                let s = canvas.getBoundingClientRect(),
                    t = e.clientX-s.left,
                    r = e.clientY-s.top;
                    
                    cursor.style.transform=`translate3d(${t}px, ${r}px, 0)`
            };
            
            document.addEventListener("mousemove", moveCursor),
            window.addEventListener("load", moveCursor),

            links && links.forEach(e => {
                e.addEventListener("mouseenter", () => {
                    cursor.classList.add("-active"),
                    cursor.classList.add("-link")
                }),

                e.addEventListener("mouseleave", () => {
                    cursor.classList.remove("-active"),
                    cursor.classList.remove("-link")
                })
            })
        }
    }
</script>