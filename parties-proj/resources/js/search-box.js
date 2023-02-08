const ledgerSearchContainerS = document.querySelectorAll('.ledger-search-container')

ledgerSearchContainerS.forEach(ledgerSearchContainer => {
    const ledgerSearchValueInput = ledgerSearchContainer.querySelector('.ledger-search-value-input')
    const ledgerSearchIdInput = ledgerSearchContainer.querySelector('.ledger-search-id-input')
    const ledgerSearchDropdown = ledgerSearchContainer.querySelector('.ledger-search-dropdown')
    const ledgerSearchLiS = ledgerSearchContainer.querySelectorAll('.ledger-search-li')

    // on window load, select textcontent of li by the given id in ledgerSearchIdInput
    window.addEventListener('load', () => {
        const savedId = ledgerSearchIdInput.value

        ledgerSearchLiS.forEach(li => {
            if (li.value == savedId) {
                ledgerSearchValueInput.value = li.textContent
            }
        });
    })

    // on input click toggle dropdown
    ledgerSearchValueInput.addEventListener('click', () => {
        ledgerSearchDropdown.classList.toggle('hidden')
    })

    // on li click toggle selection
    ledgerSearchLiS.forEach((li) => {
        li.addEventListener('click', (e) => {
            const liValue = e.target.value

            if (liValue != null) {
                ledgerSearchIdInput.value = liValue

                ledgerSearchValueInput.value = li.textContent
            }
            else {
                ledgerSearchValueInput.value = 'ошибка. попробуйте ещё раз'
            }
        })
    })

    // on ledgerSearchValueInput input toggle list values
    ledgerSearchValueInput.addEventListener('input', (e) => {
        const userValue = e.target.value

        ledgerSearchLiS.forEach((li) => {
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
