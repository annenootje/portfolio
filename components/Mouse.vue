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
                cases = document.querySelectorAll(".case"),
                links = document.querySelectorAll(".link"),
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
                    cursor.classList.add("-link"),
                    
                    setTimeout(() => {
                        // cursor_inner.style.width = link.offsetWidth + 'px';
                        // cursor_inner.style.height = '1px';
                        // cursor_inner.style.border = 'none';
                        cursor_inner.style.backgroundColor = 'white';
                        
                        // cursor.style.transform = "translate3d(" + link.getBoundingClientRect().left + 'px' + "," + link.getBoundingClientRect().bottom + "px, 0px) !important";
                        // console.log(link.getBoundingClientRect().left);
                    }, 0);
                }),

                link.addEventListener("mouseleave", () => {
                    cursor.classList.remove("-active"),
                    cursor.classList.remove("-link");

                    // cursor_inner.style.width = '40px';
                    // cursor_inner.style.height = '40px';
                    // cursor_inner.style.border = '1px solid white';
                    cursor_inner.style.backgroundColor = 'transparent';
                })
            })
        }
    }
</script>