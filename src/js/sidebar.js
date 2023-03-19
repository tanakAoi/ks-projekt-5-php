const sidebarToggle = () => {

    const content = document.querySelector('.doc-content')
    const sidebar = document.querySelector('.doc-content__sidebar')
    const sidebarButton = document.querySelector('.sidebar-settings__button')

    const toggleSidebar = (event) => {
        sidebar.classList.toggle('doc-content__sidebar--closed')
        content.classList.toggle('doc-content--closed-sidebar')

        // Change icon
        const icon = event.currentTarget.querySelector('span')

        if ( icon.innerText === 'left_panel_close' ) {

            icon.innerText = 'left_panel_open'

        } else {

            icon.innerText = 'left_panel_close'

        }

    }

    sidebarButton.addEventListener('click', toggleSidebar)
}

sidebarToggle()