const localStorageKey = 'contact-form'
const backendUrl = 'https://cejqmcufmixmqwfoidn6bxliua0ocokq.lambda-url.eu-central-1.on.aws/'
const receiverEmail = 'jonas@sanjo-solutions.com'

document.addEventListener('DOMContentLoaded', function () {
  const $form = document.querySelector('#contact-form')
  const $successMessage = document.getElementById('success-message')
  const $errorMessage = document.getElementById('error-message')
  const $mailToLink = document.getElementById('mail-to')

  loadFormData()

  $form.addEventListener('submit', async function (event) {
    event.preventDefault()

    try {
      const response = await fetch(backendUrl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: serializeFormDataToJSON()
      })

      const responseData = JSON.parse(await response.text())

      $successMessage.classList.remove('d-none')
      $errorMessage.classList.add('d-none')
      clearSavedFormData()
    } catch (error) {
      console.error(error)
      const $subject = document.getElementById('subject')
      const $message = document.getElementById('message')
      $mailToLink.href = 'mailto:' + receiverEmail +
        `?subject=${encodeURIComponent($subject.value)}&body=${encodeURIComponent($message.value)}`
      $errorMessage.classList.remove('d-none')
      $successMessage.classList.add('d-none')
    }
  })

  $form.addEventListener('keyup', saveFormData)
  $form.addEventListener('change', saveFormData)

  function saveFormData() {
    localStorage.setItem(localStorageKey, serializeFormDataToJSON())
  }

  function loadFormData() {
    const item = localStorage.getItem(localStorageKey)
    if (item) {
      try {
        const data = JSON.parse(item)
        for (const [key, value] of Object.entries(data)) {
          const $input = $form.querySelector(`[name="${key}"]`)
          if ($input) {
            $input.value = value
          }
        }
      } catch (error) {
        console.error(error)
      }
    }
  }

  function clearSavedFormData() {
    localStorage.removeItem(localStorageKey)
  }

  function serializeFormDataToJSON() {
    const data = new FormData($form)
    return JSON.stringify(Object.fromEntries(data.entries()))
  }
})
