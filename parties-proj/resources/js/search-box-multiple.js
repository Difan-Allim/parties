const ledgerMultipleContainerS = document.querySelectorAll('.ledger-multiple-container')

ledgerMultipleContainerS.forEach(ledgerMultipleContainer => {
    const ledgerMultipleValueInput = ledgerMultipleContainer.querySelector('.ledger-multiple-value-input')
    const ledgerMultipleIdInput = ledgerMultipleContainer.querySelector('.ledger-multiple-id-input')
    const ledgerMultipleDropdown = ledgerMultipleContainer.querySelector('.ledger-multiple-dropdown')
    const ledgerMultipleLiS = ledgerMultipleContainer.querySelectorAll('.ledger-multiple-li')
    const ledgerMultipleSelected = ledgerMultipleContainer.querySelector('.ledger-multiple-selected')

    // on window load, select textcontent of li by the given id in ledgerMultipleIdInput
    window.addEventListener('load', () => {
        const idInputsStr = ledgerMultipleIdInput.getAttribute('value')
        console.log(idInputsStr)

        if (idInputsStr) {
            ledgerMultipleDropdown.classList.toggle('hidden')


            const idInputsArr = idInputsStr.split(',')


            idInputsArr.forEach(idInput => {
                ledgerMultipleLiS.forEach(li => {
                    if (li.value == idInput) {
                        const liValue = li.textContent

                        li.classList.add('ledger-selected')
                        li.classList.add('bg-slate-200')

                        const p = document.createElement('p')
                        const node = document.createTextNode(`${liValue}`)
                        p.appendChild(node)
                        console.log(p)
                        ledgerMultipleSelected.appendChild(p)
                    }
                })
            })
        }

    })

    // on input click toggle dropdown
    ledgerMultipleValueInput.addEventListener('click', () => {
        ledgerMultipleDropdown.classList.toggle('hidden')
    })

    // on li click toggle selection
    ledgerMultipleLiS.forEach((li) => {
        li.addEventListener('click', () => {
            const liId = li.getAttribute('value')
            const liValue = li.textContent
            const idInput = ledgerMultipleIdInput.getAttribute('value')

            if (liId != null) {

                if (li.classList.contains('ledger-selected')) { // when li is selected, remove elements
                    li.classList.remove('ledger-selected')
                    li.classList.remove('bg-slate-200')

                    if (idInput.includes(`,${liId}`)) { // rest elements
                        ledgerMultipleIdInput.setAttribute('value', idInput.replace(`,${liId}`, ''))
                    }
                    else if (idInput.includes(`${liId},`)) { // first element
                        ledgerMultipleIdInput.setAttribute('value', idInput.replace(`${liId},`, ''))
                    }
                    else {
                        ledgerMultipleIdInput.setAttribute('value', idInput.replace(`${liId}`, ''))
                    }

                    const ps = ledgerMultipleSelected.querySelectorAll('p')
                    ps.forEach(p => {
                        if (p.textContent == liValue) {
                            p.remove()
                        }
                    })
                }
                else { // when li is NOT selected, add elements
                    li.classList.add('ledger-selected')
                    li.classList.add('bg-slate-200')

                    if (idInput === '') { // first element
                        ledgerMultipleIdInput.setAttribute('value', `${liId}`)
                    }
                    else { // rest elements
                        ledgerMultipleIdInput.setAttribute('value', `${idInput},${liId}`)
                    }

                    const p = document.createElement('p')
                    const node = document.createTextNode(`${liValue}`)
                    p.appendChild(node)
                    ledgerMultipleSelected.appendChild(p)
                }

                console.log(ledgerMultipleIdInput.getAttribute('value'))
            }
            else {
                ledgerMultipleValueInput.value = 'ошибка. попробуйте ещё раз'
            }
        })
    })

    // on ledgerMultipleValueInput input toggle list values
    ledgerMultipleValueInput.addEventListener('input', (e) => {
        const userValue = e.target.value

        ledgerMultipleLiS.forEach((li) => {
            const liValue = li.textContent.toLowerCase()

            if (!liValue.includes(userValue)) {
                li.classList.add('hidden')
            }
            else {
                li.classList.remove('hidden')
            }
        })
    })
})
